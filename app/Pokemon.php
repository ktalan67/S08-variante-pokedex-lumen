<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pokemon extends Model {

    protected $id;
    protected $nom;
    protected $pv;
    protected $attaque;
    protected $defense;
    protected $attaque_spe;
    protected $defense_spe;
    protected $vitesse;
    protected $numero;
    protected $primaryKey = 'numero';

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPv()
    {
        return $this->pv;
    }
    public function getAttaque()
    {
        return $this->attaque;
    }
    public function getDefense()
    {
        return $this->defense;
    }
    public function getAttaque_Spe()
    {
        return $this->attaque_spe;
    }
    public function getDefense_Spe()
    {
        return $this->defense_spe;
    }
    public function getVitesse()
    {
        return $this->vitesse;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function type()
    {
    return $this->belongsTo('App\Type', 'pokemon_type', 'pokemon_numero', 'type_id');
    }
}