<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lista extends Controller
{
    public function lista_ki(){
        $adat = DB::select("SELECT * FROM adatok");
        $atlagpara = DB::table('adatok')->avg('para');
        $atlaghomer = DB::table('adatok')->avg('homer');
        return view('lista', ["adat" => $adat] , ["atlagpara" => $atlagpara])->with(["atlaghomer" => $atlaghomer]);
    }
    public function Torles(Request $req){
        DB::delete("DELETE FROM adatok WHERE ID=?",[$req->tid]);
        $data['error'] = false;
        return response()->json($data);
    }
    public function rogzites(Request $req){
        DB::insert("INSERT INTO riasztasok(rogzitesi_ido, tavolsag, nev)
         VALUES (?,?,?)",[date("Y-m-d H:i:s"),$req->tavolsag,$req->nev]);
        $data['error']=false;
        $data['msg']="rözítés sikeres!";
        return response()->json($data);
        
    }

}
