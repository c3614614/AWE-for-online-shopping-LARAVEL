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
            <button value="{{$product->id}}" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Select</button>
        </form>
    </div>
</body>
</html>
