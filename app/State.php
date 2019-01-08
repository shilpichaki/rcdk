<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "sub_broker_state";

    public function permanentState()
    {
        return $this->belongsTo('App\Address');
    }

    public function presentState()
    {
        return $this->belongsTo('App\Address');
    }
}
