<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealershipRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealership_registration', function (Blueprint $table) {
            $table->id(); 
            $table->string('company_reg_no') ->unique()->nullable(); 
            $table->string('company_name') ->unique()->nullable(); 
            $table->string('showroom_adr')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('mobile_no')->unique()->nullable(); 
            $table->string('email_id')->unique()->nullable(); 
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
        Schema::dropIfExists('dealership_registration');
    }
}
