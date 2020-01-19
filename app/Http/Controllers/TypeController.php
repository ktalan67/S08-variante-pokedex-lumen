<?php

namespace App\Http\Controllers;

use App\Type;


class TypeController extends Controller
{
    public function types()
    {
        $typeList = Type::all();
        return view('main/types', [
            "typeList" => $typeList, 
            ]);   
    }
    public function getPokemonsByType($id)
    {
        $typeId = Type::find($id);
        return view('main/type', [
            "typeId" => $typeId, 
            ]);   
}
}