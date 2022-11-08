<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('layouts.index');
    }
    public function about(){
        $i=1;
        return view('layouts.about',compact('i'));
    }
    public function map(){
        return view('layouts.map');
    }
    public function weathers(){
        $mun = Municipality::all();
        $mun=$mun->sortBy('name');
        return view('layouts.weather',compact('mun'));
    }
}
