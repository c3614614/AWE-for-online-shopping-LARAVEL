<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Styled Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md mx-auto bg-white rounded-md p-6 shadow-md">
        <form>
            <!-- This code will be displayed once for every product -->
            <div class="mb-4">
                <p class="text-xl font-semibold mb-2">{{$product->title}}</p>
                <p class="text-gray-600">${{$product->price}}</p>
                <p class="text-gray-600">Artist: {{$product->artist}}</p>
            </div>

            @if(Route::currentRouteName()=='home'||Route::currentRouteName()=='product')
                <button value="{{$product->id}}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full select-product">Select</button>
            @else
                @can('purchase-product')
                    <button value="{{$product->id}}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
                @endcan
                @can('edit-product')
                    <button value="{{$product->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full update-product">Edit</button>
                @endcan
            @endif
        </form>
    </div>
</body>
</html>
