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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('AdId');
            $table->integer('RoId')->unsigned();
            $table->foreign('RoId')->references('RoId')->on('roles');
            $table->string('AdFname');
            $table->string('AdMname');
            $table->string('AdLname');
            $table->string('AdImage')->nullable();
            $table->integer('AdPhone');
            $table->string('AdEmail')->unique();
            
            $table->string('AdPassword');
            $table->string('AdEnabled');

           
            $table->timestamp('email_verified_at')->nullable();
          
            $table->rememberToken();
         



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
        Schema::dropIfExists('admins');
    }
};
