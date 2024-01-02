window.onload = function () {
    document.addEventListener('change', e => {
        if (e.target.matches('select.select-box')) {
            filterByProductType(e.target.value);
        }
    });

    document.addEventListener('click', e => {
        if (e.target.classList.contains('delete-product')) {
            const productId = e.target.getAttribute('value');
            deleteProductByID(productId);
        }
        if (e.target.matches('button.select-product')) {
            getProductByID(e.target.value);
        }
        if (e.target.matches('button.edit-product')) {
            updateProductByID(e.target.value);
        }
        if (e.target.matches('button.buy-product')) {
            buyProductByID(e.target.value);
        }
    });
}

function buyProductByID(id) {
    alert('product purchased');
}

function getProductByID(id) {
    window.location = "/product/" + id;
}

function updateProductByID(id) {
    window.location = "/product/" + id + "/edit";
}

async function filterByProductType(id) {
    if (id == 0) window.location = "/product/"
    else {
        try {
            const response = await axios.get('/filter',
                {params: {producttype: id}}
            );

            var filter = document.getElementById("productlist");
            filter.innerHTML = response.data;
            var pagination = document.getElementById("pagination");
            pagination.innerHTML = "<br><br>";

        } catch (error) {
            console.error(error);
        }
    }
}

async function deleteProductByID(id) {
    try {
        const response = await axios.delete("/product/" + id);

        if (response.data.msg === "success") {
            alert("Successfully Deleted");
            window.location = "/";
        } else {
            alert("Delete operation failed.");
        }
    } catch (error) {
        console.error("Error deleting product:", error.response.data);
        alert("An error occurred while deleting the product.");
    }
}
