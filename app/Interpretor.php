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
        'experience',
        'descriptionOfServices',
        'certificate_id'
    ];
    protected $primaryKey = 'id';

    public function user_photo(){
        return $this->hasOne('App\User_photo');
    }

    public function gender(){
        return $this->hasOne('App\Gender');
    }

    public function city(){
        return $this->hasOne('App\City');
    }

    /*public function messenger(){
        return $this->hasMany('App\Messenger');
    }*/

    /*public function language(){
        return $this->hasMany('App\Language');
    }*/

    /*public function service(){
        return $this->hasMany('App\Service');
    }*/

    public function work_city()
    {
        return $this->belongsToMany('App\Work_city');
    }
   /* public function extrainfo(){
        return $this->hasMany('App\ExtraInfo');
    }
    public function excursion(){
        return $this->hasMany('App\Excursion');
    }
    public function interpretor_language()
    {
        return $this->belongsTo('App\Interpretor_Language');
    }
    public function interpretor_service()
    {
        return $this->belongsTo('App\Interpretor_Service');
    }
    public function interpretor_messenger()
    {
        return $this->belongsTo('App\Interpretor_Messenger');
    }*/

}
