<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class NvDVController extends Controller
{
    //

    public function nvdichvu()
    {
        //
        $nvdichvus =  NhanVien::where('MaPB','=','DV')->paginate(5)->fragment('nvdichvus');
        //dd($nvdichvus);
        return view('QLDV.listNvDV')->with('nvdichvus',$nvdichvus);
    }
}
