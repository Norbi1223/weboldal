<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class iranyitas extends Controller
{
    public function iranyitas_ki(){

        return view('iranyitas');
    }
    public function iranyitas_be(Request $req){
        return view('iranyitas');
        
    }

    public function motorBekapcsolas(){
        $url = env('WEMOS_IP')."/motorBekapcsolas";
        $data['valasz'] = file_get_contents($url);
        return response()->json($data);
    }
    public function motorLekapcsolas(){
        $url = env('WEMOS_IP')."/motorLekapcsolas";
        $data['valasz'] = file_get_contents($url);
        return response()->json($data);
    }
}
