<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor_Excursion extends Model
{
    protected $table = "interpretor_excursions";
    public function interpretor(){
        return $this->hasMany('App\Interpretor');
    }
    public function excursion(){
        return $this->hasMany('App\Excursion');
    }
}
