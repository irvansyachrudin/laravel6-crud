<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form()
    {
        return view('form');
    }
    public function welcome(Request $request)
    {
        // dd($request->all());
        $nama_depan = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcome', ['nama_depan' => $nama_depan, 'nama_blkng' => $last_name]);
        // return view('welcome');
    }
}
