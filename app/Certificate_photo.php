<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate_photo extends Model
{
    protected $table = "certificate_photos";
    protected $fillable = [
        'id',
        'path',
	    'certificateId'
    ];
    protected $primaryKey = 'id';
}
