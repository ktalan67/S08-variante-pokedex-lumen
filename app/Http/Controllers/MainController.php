<?php

namespace App\Http\Controllers;


use App\Pokemon;
use App\Type;
use Illuminate\Support\Facades\DB;


class MainController extends CoreController


{
    public function home()
    {
        $pokemonList = Pokemon::all();
        return view('main/home', [
            "pokemonList" => $pokemonList, 
            ]);
    }
        
    public function pokemon($numero)
    {
        $pokemon = Pokemon::find($numero);
        $typeList = Type::find($numero);
        return view('main/pokemon', [
            'pokemon' => $pokemon,
            'typeList'   => $typeList,
            ]);
    }

    public function types()
    {
        $typeList = Type::all();
        return view('main/types', [
            "typeList" => $typeList, 
            ]);   
    }

    public function type($type_id)
    {
        $pokemonList = Pokemon::find($type_id);
        return view('main/type', [
            "pokemonList" => $pokemonList, 
            ]);
    }

}