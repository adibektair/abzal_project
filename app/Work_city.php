<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_city extends Model
{
    protected $table = 'work_cities';
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';

    public function interpretor()
    {
        return $this->belongsToMany('App\Interpretor');
    }
}
