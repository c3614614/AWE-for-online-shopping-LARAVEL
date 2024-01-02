<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() 
    {
      //$this->authorizeResource(Product::class, 'product');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
       // dd($products);
        return view('products', ['products'=>$products]);

        /**  if(Route::current()->getName()=='Home')
         * $products = Product::inRandomOrder()->limit(2)->get();
        *else $products = Product::all();
        
        *return view('products', ['products'=>$products]);
     */
    }

    /**
     * Show the form for creating a new resource.
     */
   
   
    public function create()
    {
       
        return view('components.product-form');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'artist' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_type' => 'required', // Validate product_type field
        ]);
    
        $product = new Product([
            'artist' => $validatedData['artist'],
            'title' => $validatedData['title'],
            'price' => $validatedData['price'],
            'product_type_id' => $validatedData['product_type'], // Save product_type_id
        ]);
    
        $product->save();
    
        return redirect()->route('product.index')->with('success', 'Product added successfully.');  
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $product = Product::with('productType')->find($id);
    return view('product', ['product' => $product]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('components.product-edit-form', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $id)
{
    $product = Product::find($id);
    $product->artist = $request->artist;
    $product->title = $request->title;
    $product->price = $request->price;
    $product->product_type_id = $request->product_type; // Update product_type_id

    $product->save();

    return redirect()->route('product.index')->with('success', 'Product updated successfully.'); 
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
       // $this->authorize('delete', $product);

        $product->delete();
    
        return response()->json(["msg" => "success"]);
    }


    

}




    