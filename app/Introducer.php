<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introducer extends Model
{
    protected $table = "introducer_master";
    public $primaryKey = "id";
    public $timestamps = "true";
    protected $fillable = [
        'sub_broker_id','introducer_name', 'introducer_code',
    ];

    //sub broker details
    public function sub_broker()
    {
        return $this->belongsTo('App\SubBroker');
    }
}
