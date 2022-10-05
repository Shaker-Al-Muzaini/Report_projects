<?php
 
namespace App\Http\Controllers;    
      
use App\Models\canter;  
use Illuminate\Http\Request;  
   
class CanterController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('invoices.inovices');
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\canter  $canter
     * @return \Illuminate\Http\Response
     */
    public function show(canter $canter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\canter  $canter
     * @return \Illuminate\Http\Response
     */
    public function edit(canter $canter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\canter  $canter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, canter $canter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\canter  $canter
     * @return \Illuminate\Http\Response
     */
    public function destroy(canter $canter)
    {
        //
    }
}
