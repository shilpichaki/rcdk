<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubBroker extends Model
{
    protected $table = "sub_broker_master";
    public $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'name', 'identity', 'introducer_id', 'address_id', 'dob', 'age', 'phone_no', 'email', 'home_no', 'fax_no', 'education', 'proff_qualification', 'amfi_no', 'irda_no', 'other_qualification', 'occupation', 'exp_year', 'product', 'pan_no', 'aadhar_no', 'bank_id', 'nominee_id',
    ];
    protected $hidden = [
        'password'
    ];

}
