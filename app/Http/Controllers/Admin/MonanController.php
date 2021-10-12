<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMonanRequest;
use App\Http\Requests\UpdateMonanRequest;
use App\Models\Monan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monans = Monan::paginate(5)->fragment('monans');
        return view('QLDV.dsmonan')->with('monans',$monans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('QLDV.addmonan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tenma' => 'required|unique:monans|max:255',
            'mota' => 'required|max:1000',
            'giama' => 'numeric',
        ]);
        $monan = new Monan;
        $monan->tenma = $request->tenma;
        $monan->mota = $request->mota;
        $monan->loaimon = $request->loaimon;
        $monan->giama = $request->giama;
        $monan->imgma = $request->thumbnails[0];
        $monan->save();
        return redirect()->route('admin.listmonan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function show(Monan $monan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function edit(Monan $monan)
    {
        //
        $select = 'selected';
        return view('QLDV.editmonan')->with('monan',$monan)->with('select',$select);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonanRequest $request, Monan $monan)
    {
        //
        $monan->fill($request->all());
        if(isset( $request->thumbnails[0])){
            $monan->imgma = $request->thumbnails[0];
        }
        $monan->update();
        return redirect()->route('admin.listmonan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monan $monan)
    {
        //
        $monan->delete();
        return redirect()->back();
    }
}
