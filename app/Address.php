<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "address_master";
    public  $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'present_address', 'permanent_address',
    ];

    //sub broker details
    public function sub_broker_details()
    {
        return $this->belongsTo('App\SubBroker', 'sub_broker_id','id');
    }
}
