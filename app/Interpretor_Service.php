<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor_Service extends Model
{
    protected $table = "interpretor_services";
    protected $fillable = [
        'id',
        'costPerDay',
        'costPerHour'
    ];
    public function interpretor(){
        return $this->hasMany('App\Interpretor');
    }
    public function service(){
        return $this->hasMany('App\Service');
    }
}
