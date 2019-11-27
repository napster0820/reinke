<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('period',false, true, 5);
            $table->double('vl_irrigation_sys', 8, 2);
            $table->double('vl_investment', 8, 2);
            $table->double('vl_energy', 8, 2);
            $table->double('vl_maintenance', 8, 2);
            $table->double('vl_entry', 8, 2);
            $table->double('vl_liquidation', 8, 2);
            $table->double('vl_period_flow', 8, 2);
            $table->double('vl_accumulated', 8, 2);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_flows');
    }
}
