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
        $atlagminoseg = DB::table('adatok')->avg('minoseg');
        $atlaghomer = DB::table('adatok')->avg('homer');
        return view('lista', ["adat" => $adat] , ["atlagpara" => $atlagpara])->with(["atlaghomer" => $atlaghomer])->with( ["atlagminoseg" => $atlagminoseg]);
    }
    public function Torles(Request $req){
        DB::delete("DELETE FROM adatok WHERE ID=?",[$req->tid]);
        $data['error'] = false;
        return response()->json($data);
    }
    public function rogzites(Request $req1){
        DB::insert("INSERT INTO adatok(para, homer, magas, minoseg,datum)
         VALUES (?,?,?,?,?)",[$req1->para,$req1->hom,$req1->tav,$req1->levego,date('Y-m-d H:i:s')]);
        $data['error']=false;
        $data['msg']="rögzítés sikeres!";
        return response()->json($data);
        
    }

}
