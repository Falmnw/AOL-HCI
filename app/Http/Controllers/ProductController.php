<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('catalogue', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('addproduct');
    }

    public function create(Request $req)
    {
        $picturePath= null;
        if($req->hasFile('picture')){
            $picturePath = $req->file('picture')->store('products','public');
        }

        Product::create([
            'name' => $req->name,
            'category' => $req->category,
            'description' => $req->description,
            'picture' => $picturePath
        ]);

        return back()->with('success', 'Product added successfully!'); }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('updateproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $req)
    {
        $picturePath= null;
        if($req->hasFile('picture')){
            $picturePath = $req->file('picture')->store('products','public');
        }

        Product::findOrFail($id)->update([
            'name' => $req->name,
            'category' => $req->category,
            'description' => $req->description,
            'picture' => $picturePath
        ]);

        $products = Product::all();
        return view('catalogue', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
