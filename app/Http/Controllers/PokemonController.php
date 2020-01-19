<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Type;
use Illuminate\Support\Facades\DB;


class PokemonController extends Controller
{
    
    public function getPokemon($numero)
    {
        $pokemon = Pokemon::all()->firstWhere('numero', $numero);
    return view('main/pokemon', [
        'pokemon' => $pokemon, 
        ]); 
    }
}