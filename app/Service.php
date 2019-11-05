<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "countries";
    protected $fillable = [
        'id',
        'name',
        'costPerDay',
        'costPerHour'
    ];
    protected $primaryKey = 'id';
}
