<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class UserController 

{

    public function combatPost(Request $request)
    {
        $pokemonCombat2 = $request->input("pokemon1");
        $pokemonCombat2 = Pokemon::all()->firstWhere('nom', $pokemonCombat2);
    return view('main/combat', [
        'pokemonCombat1' => $pokemonCombat1, 
        'pokemonCombat2' => $pokemonCombat2,
        ]); 
        }
}