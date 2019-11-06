<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';

    public function country(){
        return $this->hasOne('App\Country');
    }

    public function interpretor()
    {
        return $this->belongsTo('App\Interpretator');
    }

}
