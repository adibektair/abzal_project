<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraInfo extends Model
{
    protected $table = "extra_infos";
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
