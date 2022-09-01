<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{

    public function index()
    {
        $sections=sections::all();
        $Products=Products::all();
        return view('Products.Products' ,compact('Products','sections'));
    }


    public function create(): void
    {

    }


    public function store(Request $request)
    {


        Products::create([
            'product_name' => $request->product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/Products');

    }


    public function show(Products $products): void
    {

    }


    public function edit(Products $products): void
    {

    }


    public function update(Request $request, Products $products): void
    {
        //
    }


    public function destroy(Products $products): void
    {
        //
    }
}
