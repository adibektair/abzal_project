<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interpretor extends Model
{
    protected $table = 'interpretors';
    protected $fillable = [
        'id',
        'photo_id',
        'name',
        'surname',
        'birthday',
        'site',
        'phoneNumber',
        'skype',
        'aboutMe',
        'education',
        'extraInfo',
        'experience',
        'descriptionOfServices',
        'excursions'
    ];
    protected $primaryKey = 'id';
}
