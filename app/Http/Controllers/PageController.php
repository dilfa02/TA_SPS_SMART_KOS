<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard () {
        return view('Dashboard');
    }

    public function hasil () {
        return view('hasil');
    }

    public function data () {
        return view('data kos');
    }
}
