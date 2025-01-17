<nav class="flex justify-start">
    <div class="m-5 shadow-2xl rounded-sm bg-yellow-300 border-blue-300">
        <a href="{{ route('home') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Home
        </a>
    </div>

    <div class="m-5 shadow-2xl rounded-sm bg-yellow-300 border-blue-300">
        <a href="{{ route('product.index') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Products
        </a>
    </div>

    @can('create', App\Models\Product::class)
    <div class="m-5 shadow-2xl rounded-sm bg-yellow-300 border-blue-300">
        <a href="{{ route('product.create') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Add Product
        </a>
    </div>
    @endcan
</nav>
