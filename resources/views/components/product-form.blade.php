<x-app-layout> <!-- If you have a layout file, otherwise omit this line -->


    <h1>Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf <!-- CSRF protection -->
        
        <table class="table">
            <tr>
                <td><label for="artist">Artist:</label></td>
                <td><input type="text" id="artist" name="artist" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="title">Title:</label></td>
                <td><input type="text" id="title" name="title" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="price">Price:</label></td>
                <td><input type="number" id="price" name="price" class="form-control" step="0.01" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>




     </x-app-layout>