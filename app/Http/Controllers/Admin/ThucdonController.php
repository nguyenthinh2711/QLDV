<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Monan;
use App\Models\Thucdon;
use Illuminate\Http\Request;

class ThucdonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $thucdons = Thucdon::paginate(5)->fragment('thucdons');
        return view('QLDV.listTD')->with('thucdons',$thucdons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $monans = Monan::get();
        return view('QLDV.addTD')->with('monans',$monans);
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
        //dd($request);
        $validated = $request->validate([
            'tentd' => 'required|unique:thucdons|max:255',
        ]);
        $monan_id = $request->monans;
        $thucdon = new Thucdon;
        $thucdon->tentd = $request->tentd;
        $thucdon->ngaytd= $request->ngaytd;
        $thucdon->save();
        $thucdon->CacMonAn()->attach($monan_id);
        return redirect()->route('admin.listThucdon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thucdon  $thucdon
     * @return \Illuminate\Http\Response
     */
    public function show(Thucdon $thucdon)
    {
        //
        //dd($thucdon);
        $monans = $thucdon->CacMonAn;
        return view('QLDV.showTD')->with('monans',$monans)->with('thucdon',$thucdon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thucdon  $thucdon
     * @return \Illuminate\Http\Response
     */
    public function edit(Thucdon $thucdon)
    {
        //
        $select = 'selected';
        $checked = 'checked';
        $monans = Monan::get();
        $monandachons = $thucdon->CacMonAn;
        return view('QLDV.editTD')->with('monans',$monans)->with('thucdon',$thucdon)->with('monandachons',$monandachons)->with('select',$select)->with('checked',$checked);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thucdon  $thucdon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thucdon $thucdon)
    {
        //
        $thucdon->tentd = $request->tentd;
        $thucdon->ngaytd= $request->ngaytd;
        $thucdon->update();
        $monan_id = $request->monans;
        $thucdon->CacMonAn()->detach();
        $thucdon->CacMonAn()->attach($monan_id);
        $monans = $thucdon->CacMonAn;
        return view('QLDV.showTD')->with('monans',$monans)->with('thucdon',$thucdon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thucdon  $thucdon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thucdon $thucdon)
    {
        //
    }
}
