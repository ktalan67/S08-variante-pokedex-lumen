<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pokemon extends Model {

    protected $table = "pokemon";


    public function type()
    {
    return $this->belongsToMany('App\Type', 'pokemon_type', 'pokemon_numero', 'type_id');
    }

}