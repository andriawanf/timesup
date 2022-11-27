<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class PenggunaController extends Controller
{
    function index()
    {
        return  view('auth/login');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success', 'Berhasil Login');
        }else{
            return redirect('auth')->withErrors('Username dan Password yang dimasukan salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return Redirect('auth')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return View('auth/register');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukan email yang valid',
            'email.unique' => 'Email pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimum 6 karakter',
        ]);

        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success', Auth::user()->name . 'Berhasil Login');
        }else{
            return redirect('auth')->withErrors('Username dan Password yang dimasukan salah');
        }
    }
}