<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor_Messenger extends Model
{
    protected $table = "interpretor_messengers";
    public function interpretor(){
        return $this->hasMany('App\Interpretor');
    }
    public function messenger(){
        return $this->hasMany('App\Messenger');
    }
}
