<?php

namespace App\Http\Controllers;


use App\Pokemon;
use App\Type;
use Illuminate\Support\Facades\DB;


class MainController extends Controller


{
    public function home()
    {
        $pokemonList = Pokemon::all();
        return view('main/home', [
            "pokemonList" => $pokemonList, 
            ]);
    }

    public function types()
    {
        $typeList = Type::all();
        return view('main/types', [
            "typeList" => $typeList, 
            ]);   
    }
}