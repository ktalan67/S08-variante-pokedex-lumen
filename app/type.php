<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Type extends Model {

protected $table = "type";
protected $id;
protected $name;
protected $color;


    public function pokemons()
    {
    return $this->belongsToMany('App\Pokemon', 'pokemon_type', 'type_id', 'pokemon_numero');
    }
    public function getName()
    {
    return $this->name;
    }
    public function getColor()
    {
    return $this->color;
    }
}