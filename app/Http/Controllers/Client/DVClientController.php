<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Dichvu;
use App\Models\Monan;
use App\Models\Thucdon;
use Illuminate\Http\Request;

class DVClientController extends Controller
{
    //
    public function show()
    {   
        //
        $weekday = date("l");
        $weekday = strtolower($weekday);
        $thucdon = Thucdon::where('ngaytd','=',$weekday)->first() ;
        $monans = $thucdon->CacMonAn;
        $dichvus =  Dichvu::where('loaidv_id','=',3)->get();
        return view('client.home')->with('monans',$monans)->with('dichvus',$dichvus);

    }
}
