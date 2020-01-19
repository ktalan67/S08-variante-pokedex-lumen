<?php

namespace App\Http\Controllers;


use App\Type;
use App\Pokemon;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    public function __construct()
    {
    View::share('allTypes', Type::all());
    View::share('pokemonList', Pokemon::all());     
    }
}