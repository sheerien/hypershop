<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('paypal_email')->nullable();
            $table->string('token' , 60)->unique();
            $table->string('name');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('status')->default(\App\Hypershop\AffiliateDefaults::PENDING);
            $table->integer('discount');
            $table->string('discount_type')->default(\App\Hypershop\CouponDefaults::PERCENTAGE);
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
        Schema::dropIfExists('affiliates');
    }
}
