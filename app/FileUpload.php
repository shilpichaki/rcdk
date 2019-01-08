<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = "file_upload";
    public $primaryKey = "id";
    public $timestamps = "true";
    protected $fillable = [
        'sub_broker_id','amfi_file', 'photo', 'signature',
    ];

    //Sub Broker Details
    public function sub_broker()
    {
        return $this->belongsTo('App\SubBroker');
    }

}
