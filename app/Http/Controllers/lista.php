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
        DB::insert("INSERT INTO adatok(para, homer, magas,  minoseg)
         VALUES (?,?,?,?)",$req1->para,$req1->hom,$req1->tav,$req1->levego);
        $data['error']=false;
        $data['msg']="rözítés sikeres!";
        return response()->json($data);
        
    }

}
