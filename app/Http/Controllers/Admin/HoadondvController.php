<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hoadondv;
use Illuminate\Http\Request;

class HoadondvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hoadons =  Hoadondv::paginate(5)->fragment('hoadons');
        return view('QLDV.listHD')->with('hoadons',$hoadons);
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
     * @param  \App\Models\Hoadondv  $hoadondv
     * @return \Illuminate\Http\Response
     */
    public function show(Hoadondv $hoadondv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hoadondv  $hoadondv
     * @return \Illuminate\Http\Response
     */
    public function edit(Hoadondv $hoadondv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hoadondv  $hoadondv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hoadondv $hoadondv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hoadondv  $hoadondv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hoadondv $hoadondv)
    {
        //
    }
}
