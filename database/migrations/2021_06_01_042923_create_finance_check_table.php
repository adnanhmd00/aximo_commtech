<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_check', function (Blueprint $table) {
            $table->id();
            $table->string('hp_company_name'); 
           $table->string('country'); 
           $table->string('make'); 
           $table->string('model');
           $table->string('license_plate_no');
           $table->string('chassis_no');
           $table->string('engine_no');
           $table->string('contract_startdate');           
           $table->string('contract_enddate');           
           $table->string('mobile_no');
           $table->string('email_id');
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
        Schema::dropIfExists('finance_check');
    }
}
