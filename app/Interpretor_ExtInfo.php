<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor_ExtInfo extends Model
{
    protected $table = "interpretor_ext_infos";
    public function interpretor(){
        return $this->hasMany('App\Interpretor');
    }
    public function extraInfo(){
        return $this->hasMany('App\ExtraInfo');
    }
}
