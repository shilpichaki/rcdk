<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class SubBroker extends Authenticatable
{
    use Notifiable;

    protected $table = "sub_broker_master";
    public $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'name', 'identity', 'dob', 'age', 'phone_no', 'email', 'home_no', 'fax_no', 'password', 'education', 'proff_qualification', 'amfi_no', 'irda_no', 'other_qualification', 'occupation', 'exp_year',  'pan_no', 'aadhar_no',
    ];
    protected $hidden = [
        'password'
    ];

    public function bank()
    {
        return $this->hasOne('App\BankMaster', 'sub_broker_id');
    }

    public function address()
    {
        return $this->hasOne('App\Address', 'sub_broker_id');
    }

    public function introducer()
    {
        return $this->hasOne('App\Introducer', 'sub_broker_id');
    }

    public function nominee()
    {
        return $this->hasOne('App\Nominee', 'sub_broker_id');
    }

    public function fileupload()
    {
        return $this->hasOne('App\FileUpload', 'sub_broker_id');
    }

    public function product()
    {
        return $this->hasone('App\Product', 'sub_broker_id');
    }

    public function userActivation()
    {
        return $this->hasone('App\UserActivation', 'sub_broker_id');
    }


}
