<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance_flow extends Model
{
    //
    public function client(){

        return $this->belongsTo('App\Client');
    }
    
}