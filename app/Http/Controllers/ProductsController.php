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
        $sections=sections::select('id','section_name')->get();
        $Products=Products::latest()->select('id','product_name','description','section_id')->get();
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


    public function update(Request $request)
    {
        $id = sections::where('section_name', $request->section_name)->first()->id;
        $Products = Products::findOrFail($request->pro_id);
        $Products->update([
            'Product_name' => $request->Product_name,
            'description' => $request->description,
            'section_id' => $id,
        ]);
        $r=session()->flash('Edit', 'تم تعديل المنتج بنجاح');
//        dd($Products)->toArry();
        dd($id)->toArry();

//        return redirect('/Products');
    }


    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        $Products = Products::findOrFail($request->pro_id);
        $Products->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
