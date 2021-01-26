<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliate_id');
            $table->string('reference')->nullable();
            $table->string('status')->default(\App\Hypershop\TransactionDefaults::PENDING);
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
        Schema::dropIfExists('affiliate_invoices');
    }
}
