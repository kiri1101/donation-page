<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('expiration_month');
            $table->string('expiration_year');
            $table->string('cvc');
            $table->string('surname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('address2');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('zip'); 
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
        Schema::dropIfExists('transactions');
    }
};
