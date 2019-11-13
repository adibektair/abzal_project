<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function interpretor()
    {
        return $this->belongsTo('App\Interpretor');
    }
}
