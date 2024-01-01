<x-app-layout>
  

    <form method="POST" action="{{route('product.update', $product->id) }}">
        @method('PUT')   
        @csrf
<!--
        <label for="product_type" class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
    <div class="relative">
        <select name="product_type" id="product_type" class="appearance-none w-full py-2 px-3 border border-gray-300 rounded-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
    <option value="book" {{ old('product_type', $product->product_type) == 'book' ? 'selected' : '' }}>Book</option>
    <option value="movie" {{ old('product_type', $product->product_type) == 'movie' ? 'selected' : '' }}>Movie</option>
    <option value="music" {{ old('product_type', $product->product_type) == 'music' ? 'selected' : '' }}>Music</option>
</select>
-->
        <div class="mb-4">
                <label for="artist" class="block text-gray-700 text-sm font-bold mb-2">Artist/Author/Producer:</label>
                <input type="text" name="artist" id="artist" value="{{ old('artist', $product->artist) }}" class="w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}" class="w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-6">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price / 100) }}" class="w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300" >Update Product</button>

          
                <button value="{{$product['id']}}" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 delete-product">Remove</button>
        </form>
    </div>


    

   
</x-app-layout>