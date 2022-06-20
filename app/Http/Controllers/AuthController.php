<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }
    public function formuliruser(){
        return view('formuliruser');
    }
    public function simpanuser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/user')->with('alert','Data berhasil disimpan');
    }
    public function login(){
        return view('login');
    }
    public function ceklogin(Request $request){
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('login');
        }
        else
        {
            return redirect('mahasiswa');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
