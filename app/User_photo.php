<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_photo extends Model
{
    protected $table = 'user_photos';
    protected $fillable = [
        'id',
        'path'
    ];
    protected $primaryKey = 'id';

    public function interpretor()
    {
        return $this->belongsTo('App\Interpretor');
    }
}
