<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loaimon;
use Illuminate\Http\Request;

class LoaimonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loaimon  $loaimon
     * @return \Illuminate\Http\Response
     */
    public function show(Loaimon $loaimon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loaimon  $loaimon
     * @return \Illuminate\Http\Response
     */
    public function edit(Loaimon $loaimon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loaimon  $loaimon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loaimon $loaimon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loaimon  $loaimon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loaimon $loaimon)
    {
        //
    }
    public function GetLoaimon(){
        $categories = Loaimon::get();
        return response()->json(['categories' => $categories]);
    }
}
