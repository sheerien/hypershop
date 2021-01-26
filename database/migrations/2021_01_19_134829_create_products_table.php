<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('url')->unique();
            $table->text('description')->default('no description');
            $table->integer('regular_price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->timestamp('start_sale')->nullable();
            $table->timestamp('end_sale')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->foreignId('brand_id')->nullable();
            $table->string('type')->default(\App\Hypershop\ProductDefaults::SIMPLE);
            $table->string('download_url')->unique()->nullable();
            $table->double('quantity')->nullable();
            $table->string('status')->default(\App\Hypershop\ProductDefaults::DRAFT);
            $table->boolean('partial_payment')->default(config('shop.partial_payment'));
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
        Schema::dropIfExists('products');
    }
}
