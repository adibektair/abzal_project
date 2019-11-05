<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = "values";
    protected $fillable = [
        'id',
        'name'
    ];
    protected $primaryKey = 'id';
}
