<x-app-layout>

<!-- This code is displayed once on the products page only. -->

<div class="grid grid-cols-5">
        

@foreach ($products as $product) 

<x-product-card :product="$product ?? null" />

@endforeach



</div>

</x-app-layout>