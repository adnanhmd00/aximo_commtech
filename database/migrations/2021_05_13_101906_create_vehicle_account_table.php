<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_account', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('dealer')->nullable(); 
            $table->string('license_plate_no')->unique()->nullable(); 
            $table->string('engine_no')->unique()->nullable(); 
            $table->string('chassis_no')->unique()->nullable(); 
            $table->string('make')->nullable();  
            $table->string('model')->nullable(); 
            $table->string('color')->nullable();
            $table->string('email_id')->unique()->nullable(); 
            $table->string('mobile_no')->nullable();; 
            $table->string('payment_status')->nullable();;
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
        Schema::dropIfExists('vehicle_account');
    }
}
