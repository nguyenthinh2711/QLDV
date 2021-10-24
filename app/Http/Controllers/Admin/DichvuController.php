<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDichvuRequest;
use App\Models\Dichvu;
use Illuminate\Http\Request;

class DichvuController extends Controller
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

    public function dvsk(Request $request)
    {
        //
        if(isset($request->searchName)){
            $name=$request->searchName;
            $dichvus =  Dichvu::where('loaidv_id','=',3)->where('tendv','like','%'.$name.'%')->get();
            return view('QLDV.listDVSK')->with('dichvus',$dichvus)->with('oldsearch',$name);
        }else{
            $dichvus =  Dichvu::where('loaidv_id','=',3)->paginate(5)->fragment('dichvus');
            return view('QLDV.listDVSK')->with('dichvus',$dichvus);
        }
    }
    public function dvphong(Request $request)
    {
        //
        if(isset($request->searchName)){
            $name=$request->searchName;
            $dichvus =  Dichvu::where('loaidv_id','=',1)->where('tendv','like','%'.$name.'%')->get();
            return view('QLDV.listDVP')->with('dichvus',$dichvus)->with('oldsearch',$name);
        }else{
            $dichvus =  Dichvu::where('loaidv_id','=',1)->paginate(5)->fragment('dichvus');
            return view('QLDV.listDVP')->with('dichvus',$dichvus);
        }
    }
    public function dvanuong(Request $request)
    {
        //
        if(isset($request->searchName)){
            $name=$request->searchName;
            $dichvus =  Dichvu::where('loaidv_id','=',2)->where('tendv','like','%'.$name.'%')->get();
            return view('QLDV.listDVAU')->with('dichvus',$dichvus)->with('oldsearch',$name);
        }else{
            $dichvus =  Dichvu::where('loaidv_id','=',2)->paginate(5)->fragment('dichvus');
            return view('QLDV.listDVAU')->with('dichvus',$dichvus);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('QLDV.addDV');
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
        $validated = $request->validate([
            'tendv' => 'required|unique:dichvus|max:255',
            'chitiet' => 'required|max:1000',
            'giadv' => 'numeric',
        ]);
        $dichvu = new Dichvu;
        $dichvu->tendv = $request->tendv;
        $dichvu->loaidv_id = $request->loaidv_id;
        $dichvu->giadv = $request->giadv;
        $dichvu->chitiet = $request->chitiet;
        $dichvu->imgdv = $request->thumbnails[0];
        $dichvu->save();
        return redirect()->route('admin.createDV');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function show(Dichvu $dichvu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function edit(Dichvu $dichvu)
    {
        //
        $select = 'selected';
        return view('QLDV.editDV')->with('dichvu',$dichvu)->with('select',$select);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDichvuRequest $request, Dichvu $dichvu)
    {
        //
        $dichvu->fill($request->all());
        if(isset( $request->thumbnails[0])){
            $dichvu->imgdv = $request->thumbnails[0];
        }
        $dichvu->update();
        return redirect()->route('admin.listDvSK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dichvu  $dichvu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dichvu $dichvu)
    {
        //
        $dichvu->delete();
        return redirect()->back();
    }
}
