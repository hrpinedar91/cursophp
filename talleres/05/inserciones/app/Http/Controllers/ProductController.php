<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('productos.index', ['products' => Products::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


        return view('productos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $product = new Products($request->all());
         $product->save();
            return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $producto)
    {
        //
        return view('productos.edit', ['producto' => $producto ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $producto)
    {
        //
        
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
