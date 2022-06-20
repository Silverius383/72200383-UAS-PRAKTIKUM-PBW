<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Session;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::orderBy('id','asc')->paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function search(Request $request){
        $cari = $request -> cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function formulirmhs(){
        return view('formulirmhs');
    }
    public function simpanmhs(Request $request){
        $bidang_minat = implode(",",$request->bidang_minat);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect('/mahasiswa')->with('alert','Data berhasil disimpan');
    }
    public function editmhs($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('editmhs', ['mahasiswa' => $mahasiswa]);
    }
    public function updatemhs($id, Request $request){
        $bidang_minat = implode(",",$request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alert','Data berhasil diubah');
    }
    public function hapusmhs($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert','Data berhasil dihapus');
    }
}
