<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class DosenController extends Controller
{
    public function dosen(){
        $dosen = Dosen::paginate(5);
        return view('dosen', ['dosen' => $dosen]);
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $dosen = Dosen::where('nama', 'like', '%'.$cari.'%')->paginate();
        return view('dosen', ['dosen' => $dosen]);
    }
}
