<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|numeric',
            'image' => 'required|file|image',
        ]);
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "quantity" => $request->quantity,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk("local")->put("uploads\\products\\images", $request->image);
        }

        $product = new Product($data);
        if ($product->save()) {
            return back()->with('success', 'Product created successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modles\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modles\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modles\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image' => 'required|file|image',
        ]);
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "quantity" => $request->quantity,
        ];

        if ($request->hasFile('image')) {
            if (Storage::disk("local")->exists($product->image)) {
                Storage::disk("local")->delete($product->image);
            }
            $data['image'] = Storage::disk("local")->put("uploads\\products\\images", $request->image);
        }

        $product->fill($data);
        if ($product->save()) {
            return back()->with('success', 'Product updated successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modles\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (Storage::disk("local")->exists($product->image)) {
            Storage::disk("local")->delete($product->image);
        }
        if ($product->delete()) {
            return back()->with('success', 'Product deleted successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
