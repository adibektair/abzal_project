<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $fillable = [
        'id',
        'name',
        'costPerDay',
        'costPerHour'
    ];
    protected $primaryKey = 'id';

    public function value(){
        return $this->hasOne('App\Value');
    }

    public function interpretor()
    {
        return $this->belongsTo('App\Interpretor');
    }
}
