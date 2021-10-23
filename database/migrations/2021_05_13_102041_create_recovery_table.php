<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recovery', function (Blueprint $table) {
            $table->id(); 
            $table->string('vehicle_reg_no')->nullable(); 
            $table->string('report_no')->unique()->nullable(); 
            $table->string('vehicle_type')->nullable();  
            $table->string('license_plate_no')->nullable(); 
            $table->string('engine_no')->unique()->nullable();
            $table->string('chassis_no')->unique()->nullable(); 
            $table->string('country_whereRecovered')->nullable(); 
            $table->string('city_whereRecovered')->nullable(); 
            $table->string('police_station')->nullable(); 
            $table->string('email')->unique()->nullable(); 
            $table->string('mobile_no')->unique()->nullable(); 
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
        Schema::dropIfExists('recovery');
    }
}
