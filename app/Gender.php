<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';

    public function interpretor()
    {
        return $this->belongsTo('App\Interpretor');
    }
}
