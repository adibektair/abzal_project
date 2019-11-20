<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = "levels";
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
    public function interpretor_language()
    {
        return $this->belongsTo('App\Interpretor_Language');
    }
}
