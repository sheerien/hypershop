<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actionable', function (Blueprint $table) {
            $table->foreignId('action_id');
            $table->foreignId('actionable_id');
            $table->string('actionable_type');
            $table->primary([
                'action_id',
                'actionable_id',
                'actionable_type'
            ]);
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
        Schema::dropIfExists('actionable');
    }
}
