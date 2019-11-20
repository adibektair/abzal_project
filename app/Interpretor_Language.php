<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor_Language extends Model
{
    protected $table = "interpretor_languages";
    public function interpretor(){
        return $this->hasMany('App\Interpretor');
    }
    public function language(){
        return $this->hasMany('App\Language');
    }
    public function level(){
        return $this->hasMany('App\Level');
    }
}
