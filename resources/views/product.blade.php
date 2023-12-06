<x-app-layout>

<div class="grid grid-cols-5">
        

@foreach ($products as $product) 

<x-product-card :product="$product ?? null" />

@endforeach



</div>

</x-app-layout>