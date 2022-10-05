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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('EvId');
            $table->string('EvImage')->nullable();
            $table->string('EvTitle');
            $table->text('EvDescription');
            $table->text('EvEventdate');
            $table->text('EvLink');
            $table->text('EvAddress');
            $table->text('EvLocation');
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
        Schema::dropIfExists('events');
    }
};
