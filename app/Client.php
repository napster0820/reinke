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
     
}


// INSERT INTO `clients`( `id`, `name`, `address`, `country_state`, `email`, `production`, `culture`, `user_id`, `created_at`, `updated_at` ) VALUES( NULL, 'Corrales de Engorda de Tierra Blanca', 'Dom. Conocido Tierra Blanca', 'Veracruz', 'cliente1@gmail.com', 40, 40, 2, SYSDATE(), SYSDATE() )
// INSERT INTO `cash_flows`( `id`, `period`, `vl_irrigation_sys`, `vl_investment`, `vl_energy`, `vl_maintenance`, `vl_entry`, `vl_liquidation`, `vl_period_flow`, `vl_accumulated`, `client_id`, `created_at`, `updated_at` ) VALUES( 1, 1, 1849200, 1177040, 91743.47, 0, 1760000, 0, 1357983.47, 1357983.4, 1, SYSDATE(), SYSDATE())
