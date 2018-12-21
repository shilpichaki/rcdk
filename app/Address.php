<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "address_master";
    public  $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'sub_broker_id','permanent_street', 'permanent_town', 'permanent_pin', 'permanent_state_id', 'present_street', 'present_town', 'present_pin', 'present_state_id',
    ];

    //sub broker details
    public function sub_broker()
    {
        return $this->belongsTo('App\SubBroker');
    }

    public function permanentState()
    {
        return $this->hasOne('App\State','permanent_state_id');
    }

    public function presentState()
    {
        return $this->hasOne('App\State', 'present_state_id');
    }
}
