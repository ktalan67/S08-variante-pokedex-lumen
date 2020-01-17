<?php

namespace App;

use PDO;
use DBData;
use Illuminate\Database\Eloquent\Model; 

class Type extends Model {
protected $table = "type";


    public function pokemon()
    {
    return $this->belongsToMany('App\Pokemon', 'pokemon_type', 'type_id', 'pokemon_numero');
    }

}