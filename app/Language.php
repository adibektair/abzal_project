<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function interpretor_language()
    {
        return $this->belongsTo('App\Interpretor_Language');
    }
    public function level(){
        return $this->hasOne('App\Level');
    }
}
