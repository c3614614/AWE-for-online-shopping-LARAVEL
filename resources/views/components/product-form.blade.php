<x-app-layout> <!-- If you have a layout file, otherwise omit this line -->



<div class="productlist p-2">

    @if ($errors->any())
    <div class="bg-red-600 border-solid rounded-md border-2 border-red-700">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-lg text-gray-100">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf    
    
        <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-blue-900 max-w-md">
            <div class="font-bold text-sm mb-2">
            
            <div class="mb-4">
        <label for="product_type" class="block text-gray-700 text-sm font-bold mb-2">Product Type:</label>
        <select name="product_type" id="product_type" class="appearance-none w-full py-2 px-3 border border-gray-300 rounded-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
            <option value="1">Book</option>
            <option value="2">CD</option>
            <option value="3">Game</option>
        </select>
    </div>
        </select>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="title" name="title" type="text" placeholder="title">
            </div>
            <p class="text-gray-700 text-sm">
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="artist" name="artist" type="text" placeholder="artist/author/console">
            </p>
            <p class="text-gray-500 text-base mt-2">
                <input type="number"  step='0.01' value='0.00' class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="price" name="price" type="text" placeholder="price">
            </p>   
              
            <div class="flex items-center justify-end mt-4 top-auto">
                <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Add New</button>
            </div>
       </div>
    </form>
    </div>

     <label for="productImage" class="block text-sm font-medium text-gray-700">Product Image</label>
    <input type="file" id="productImage" name="productImage" class="mt-1 p-2 border border-gray-300 rounded-md">


     </x-app-layout>


     