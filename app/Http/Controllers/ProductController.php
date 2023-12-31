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
       // $this->authorizeResource(Product::class, 'product');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
       // dd($products);
        return view('product', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
   
   
    public function create()
    {
        return view('components.product-form');
        
        
    
        // Creating a new product instance
        $product = new Product();
        $product->artist = ['artist'];
        $product->title = ['title'];
        $product->price = ['price'];
        // Assign other properties accordingly
    
        // Saves the product to the database
        $product->save();
    
        // Redirect to a route or view after saving the product
        // For example, if you want to redirect to a specific route:
        // return redirect()->route('product.index');
    
        // Or if you want to load a different view
        return view('product-card');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $this->authorize('create', Product::class);  


        $validatedData = $request->validate([
            'artist' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',

        ]);
        Product::create($validatedData);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('product', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }


    

}




    