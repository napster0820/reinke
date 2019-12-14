<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash_flow extends Model
{
    public function client(){

        return $this->belongsTo('App\Client');
    }
}
