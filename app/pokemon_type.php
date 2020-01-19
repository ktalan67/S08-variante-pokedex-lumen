<?php

use Illuminate\Database\Eloquent\Model;

class Pokemon_typeModel extends Model{

    private $pokemon_numero;
    private $type_id;


    public function getPokemon_numero()
    {
        return $this->pokemon_numero;
    }
    public function getType_id()
    {
        return $this->type_id;
    }
}