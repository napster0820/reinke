<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash_flow extends Model
{
    protected $fillable = ['period', 'vl_irrigation_sys'];

    public function client(){

        return $this->belongsTo('App\Client');
    }
}
