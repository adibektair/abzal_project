<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    protected $table = 'messengers';
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';

    public function interpretor_messenger()
    {
        return $this->belongsTo('App\Interpretor_Messenger');
    }
}
