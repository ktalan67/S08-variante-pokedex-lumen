<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

     public function boot()
     {
        {
            view()->composer('*', function($view){
                $absoluteURL = str_replace('.', '-', $view->getName());
                view()->share('absoluteURL', $absoluteURL);
            });
    
        }
     }
     
    public function register()
    {
        //
    }
}
