<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash_flow extends Model
{
    protected $fillable = ['period', 'vl_irrigation_sys', 'vl_investment', 'vl_energy', 'vl_maintenance', 'vl_entry', 'vl_liquidation', 'vl_period_flow', 'vl_accumulated', 'client_id'];

    public function client(){

        return $this->belongsTo('App\Client');
    }
}
