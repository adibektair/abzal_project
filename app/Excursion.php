<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    protected $table = "excursions";
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';
    /*public function interpretor()
    {
        return $this->belongsToMany('App\Interpretor');
    }*/
}
