<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->id(); 
            $table->string('report_no')->nullable(); 
            $table->string('vehicle_reg_no')->unique()->nullable(); 
            $table->string('country')->nullable();
            $table->string('dealer')->nullable(); 
            $table->string('license_plate_no')->unique()->nullable();            
            $table->string('engine_no')->unique()->nullable();
            $table->string('chassis_no')->unique()->nullable();
            $table->string(' make')->nullable();
            $table->string(' model')->nullable();
            $table->string('colour')->nullable();
            $table->string('email_id')->unique()->nullable();
            $table->string('mobile_no')->unique()->nullable();
            $table->string('country_whereStolen')->nullable();
            $table->string('city_whereStolen')->nullable();
            $table->string('police_station')->nullable();
            $table->string('police_crime_no')->nullable();
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
        Schema::dropIfExists('report');
    }
}
