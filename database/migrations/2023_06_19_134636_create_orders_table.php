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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('address');
            $table->integer('zipcode');
            $table->string('city');
            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->longText('comment')->nullable();
            $table->string('companyName')->nullable();
            $table->string('taxNumber')->nullable();
            $table->string('shipFirstName')->nullable();
            $table->string('shipLastName')->nullable();
            $table->string('shipPhoneNumber')->nullable();
            $table->string('shipEmail')->nullable();
            $table->string('shipAddress')->nullable();
            $table->integer('shipZipcode')->nullable();
            $table->string('shipCity')->nullable();
            $table->unsignedInteger('shipCountry_id')->nullable();
            $table->foreign('shipCountry_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->longText('shipComment')->nullable();
            $table->integer('shippingCharges');
            $table->float('discount')->nullable();
            $table->string('order_status')->default('in-progress');
            $table->string('payment_status')->default('0');
            $table->float('total');
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
        Schema::dropIfExists('orders');
    }
};
