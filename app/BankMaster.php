<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankMaster extends Model
{
    protected $table = "bank_master";
    public $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'name', 'branch_name', 'account_no', 'branch_code', 'ifsc', 'micr', 'branch_rtgs_no', 'acc_type',
    ];

    //sub broker details
    public function sub_broker_details()
    {
        return $this->belongsTo('App\SubBroker', 'sub_broker_id','id');
    }
}
