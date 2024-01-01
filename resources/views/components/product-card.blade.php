<div class="p-2 m-2 rounded-lg bg-gray-50 border-2 border-blue-900 max-w-md">
    <p class="text-lg font-bold">Artist: {{ $product->artist }}</p>
    <p class="text-lg font-bold">Title: {{ $product->title }}</p>
    <p class="text-lg font-bold">Price: {{ $product->price }}</p>

    @if(Route::currentRouteName() == 'product.index' || Route::currentRouteName() == 'product')
        <button value="{{ $product->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full select-product">Select</button>
    @else
        @can('purchase-product')
            <button value="{{ $product->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
        @endcan
        @can('edit-product')
            <button value="{{ $product->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full edit-product">Edit</button>
        @endcan
    @endif
</div>
