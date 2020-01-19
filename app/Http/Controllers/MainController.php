<?php

namespace App\Http\Controllers;


use App\Pokemon;
use App\Type;
use Illuminate\Support\Facades\DB;


class MainController extends Controller


{
    public function home()
    {
        return view('main/home');
    }
    public function pokemon()
    {
        return view('main/pokemon');
    }
    public function types()
    { 
        return view('main/types');
    }
    public function combat()
    {
        return view('main/combat');
    }
}