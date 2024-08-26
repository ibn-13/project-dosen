<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConselingController extends Controller
{
    public function index()
    {
        return view('conseling.index');
    }
}