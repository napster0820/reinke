<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //utilizara la tabla clients
    //$users = DB::table('users')
    //        ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //        ->join('orders', 'users.id', '=', 'orders.user_id')
    //        ->select('users.*', 'contacts.phone', 'orders.price')
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function finance_flow()
    {
        return $this->hasOne('App\Finance_flow');
    }

    public function cash_flow()
    {
        return $this->hasOne('App\Cash_flow');
    }

}