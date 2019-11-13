<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = "countries";
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
