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
        Schema::create('media', function (Blueprint $table) {
            $table->increments('MeId');
            $table->integer('TyId')->unsigned()->nullable();
            $table->foreign('TyId')->references('TyId')->on('types');
            
            $table->integer('PaId')->unsigned()->nullable();
            $table->foreign('PaId')->references('PaId')->on('pages');

            $table->integer('FoId')->unsigned()->nullable();
            $table->foreign('FoId')->references('ForId')->on('fors');
            $table->text('Mecontent');
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
        Schema::dropIfExists('media');
    }
};
