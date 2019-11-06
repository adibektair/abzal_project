<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function level(){
        return $this->hasOne('App\Level');
    }

    public function interpretor()
    {
        return $this->belongsTo('App\Interpretor');
    }
}
