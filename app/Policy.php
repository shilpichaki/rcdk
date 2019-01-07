<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $table = "sub_broker_policy_master";
    public $primaryKey = "id";
    public $timestamps = "true";
    protected $fillable = [
        'sub_broker_id','policy_holder_name' , 'category' , 'product_name', 'policy_amount', 'issuing_status',
    ];

    //sub broker details
    public function sub_broker()
    {
        return $this->belongsTo('App\SubBroker');
    }

}
