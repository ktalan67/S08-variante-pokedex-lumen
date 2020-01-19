<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', [
    "as" => "home", 
    "uses" => "MainController@home"]);

$router->get('/pokemon/{numero:[0-9]+}', [
    "as" => "pokemon", 
    "uses" => "PokemonController@getPokemon"]);

$router->get('/types', [
    "as" => "types", 
    "uses" => "TypeController@types"]);

$router->get('/type/{id:[0-9]+}/pokemon', [
    "as" => "type", 
    "uses" => "TypeController@getPokemonsByType"]);

$router->get('/combat', [
    "as" => "combat", 
    "uses" => "MainController@combat"]);