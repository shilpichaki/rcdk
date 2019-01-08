<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankMaster extends Model
{
    protected $table = "bank_master";
    public $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'sub_broker_id','bank_name', 'branch_name', 'account_no', 'branch_code', 'ifsc', 'micr', 'branch_rtgs_no', 'acc_type',
    ];

    //sub broker details
    public function sub_broker()
    {
        return $this->belongsTo('App\SubBroker');
    }
}
