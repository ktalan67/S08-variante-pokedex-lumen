<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Type;
use Illuminate\Support\Facades\DB;


class PokemonController extends Controller
{
    public function pokemon()
    {
        $pokemon = Pokemon::all();
        return view('main/pokemon', [
            'pokemon'  => $pokemon,
            ]);
    }
    
public function type()
    {
        Pokemon::type();
        $pokemonList = Pokemon::find();
        return view('main/type', [
            "pokemonList" => $pokemonList, 
            ]);
    }
}