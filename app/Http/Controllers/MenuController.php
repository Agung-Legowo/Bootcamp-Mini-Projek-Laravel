<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
    	return view('beranda');
    }

    public function info()
    {
    	return view('info');
    }

    public function Mahasiswa()
    {
    	return view('mahasiswa');
    }
}
