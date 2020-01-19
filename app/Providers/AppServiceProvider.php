<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Pokemon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

     public function boot()
     {
        View::composer('*', function () {
            $pokemonList = Pokemon::all();
            view()->share('pokemonList', $pokemonList);
        });


     }
    public function register()
    {
    }
    }
