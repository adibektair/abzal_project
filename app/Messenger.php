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
}
