<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_vehicle', function (Blueprint $table) {
            $table->id(); 
           $table->string('vehicle_type')->nullable(); 
           $table->string('vehicle_reg_no')->unique()->nullable(); 
           $table->string('engine_no') ->unique()->nullable(); 
           $table->string('chassis_no') ->unique()->nullable();
           $table->string('seller_contact')->nullable(); 
           $table->string('seller_email')->nullable();
           $table->string('buyer_contact')->nullable();
           $table->string('buyer_email')->nullable();
           $table->string('payment_status')->nullable(); 
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
        Schema::dropIfExists('buy_vehicle');
    }
}
