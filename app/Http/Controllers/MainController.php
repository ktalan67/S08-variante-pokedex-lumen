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
        
        // Le contrôleur récupère les données
        $pokemon = Pokemon::findByNumero($numero);
        $typeList = Type::findTypeByNumero($numero);
        return view('main/pokemon', [
            'pokemon' => $pokemon,
            'typeList'   => $typeList,
        ]);
    }

    public function types()
    {
        $typeList = Type::all();
        return view('main/types', ["typeList" => $typeList, ]);   
    }

    public function type($type_id)
    {
        $pokemonList = Pokemon::findByType($type_id);

        return view('main/type', ["pokemonList" => $pokemonList, ]);
    }
    public function combat()
    {
        $pokemonCombatList = Pokemon::all();
        return view('main/combat', ["pokemonCombatList" => $pokemonCombatList, ]);  
    }
    public function combatPost()
    {
 
        $pokemonCombatList1 = new Pokemon;
        $pokemonCombat1 = $pokemonCombatList1->FindAll();
    }
}