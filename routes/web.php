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

$router->get('/pokemon/{id:[0-9]+}', [
    "as" => "pokemon", 
    "uses" => "PokemonController@pokemon"]);

$router->get('/types', [
    "as" => "types", 
    "uses" => "MainController@types"]);

$router->get('/type/{typeId:[0-9]+}', [
    "as" => "type", 
    "uses" => "TypeController:@pokemon"]);

$router->get('/combat', [
    "as" => "combat", 
    "uses" => "MainController@combat"]);


