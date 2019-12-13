<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_flows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('period',false, true, 5);
            $table->double('vl_irrigation_sys', 15, 2);
            $table->double('vl_investment', 15, 2);
            $table->double('vl_energy', 15, 2);
            $table->double('vl_maintenance', 15, 2);
            $table->double('vl_entry', 15, 2);
            $table->double('vl_liquidation', 15, 2);
            $table->double('vl_period_flow', 15, 2);
            $table->double('vl_accumulated', 15, 2);
            $table->double('vl_balance', 15, 2);
            $table->double('vl_int_irrigation_sys', 15, 2);
            $table->double('vl_crop_interest', 15, 2);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('finance_flows');
    }
}
