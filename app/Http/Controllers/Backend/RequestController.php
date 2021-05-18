<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Request as ProductRequest;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('backend.request.create', [
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $this->validate($request, [
            'quantity' => 'required|numeric|min:1|max:' . $product->quantity,
        ]);
        $data = [
            'quantity' => $request->quantity,
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'status' => 'request',
        ];

        $productRequest = new ProductRequest($data);
        if ($productRequest->save()) {
            return back()->with('success', 'Product Request make successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(ProductRequest $productRequest)
    {
        return view('backend.request.show', [
            'request' => $productRequest
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accept(ProductRequest $productRequest)
    {
        $productRequest->status = "accept";
        $productRequest->product->update(['quantity' => $productRequest->product->quantity - $productRequest->quantity]);
        if ($productRequest->save()) {
            return back()->with('success', 'Product Request accept successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reject(ProductRequest $productRequest)
    {
        $productRequest->status = "reject";
        if ($productRequest->save()) {
            return back()->with('success', 'Product Request reject successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
