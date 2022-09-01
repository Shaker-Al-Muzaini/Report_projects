<?php

namespace App\Http\Controllers;

use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{

    public function index()
    {
       $sections= sections::all();

        return  view('sections.sections',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $input=$request->all();
        $is_emitted=sections::where('section_name','=',$input['section_name'])->exists();

        if ($is_emitted){

            return redirect()->back()->with(['Error' => 'اسم القسم مسجل مسبقا ']);
        } else {

            sections::create([

                'section_name' => $request->section_name,
                'sections_description' => $request->sections_description,
                'created_by' => (Auth::user()->name),
            ]);
            return redirect()->back()->with(['Add' => 'تم اضافه القسم ']);
        }

    }



    public function show(sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function edit(sections $sections)
    {
        //
    }


    public function update (Request $request)
    {
                    $id = $request->id;
                    $this->validate($request, [
                        'section_name' => 'required|max:255|unique:sections,section_name,'.$id,
                        'sections_description' => 'required',
             ],[
                 'section_name.required' =>'يرجي ادخال اسم القسم',
                 'section_name.unique' =>'اسم القسم مسجل مسبقا',
                 'sections_description.required' =>'يرجي ادخال البيان',
             ]);
             $sections = sections::find($id);
             $sections->update([
                 'section_name' => $request->section_name,
                 'sections_description' => $request->sections_description,
             ]);
             session()->flash('edit','تم تعديل القسم بنجاج');
             return redirect('home/Sections');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        sections::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('home/Sections');
    }
}
