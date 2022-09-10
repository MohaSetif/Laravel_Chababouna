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
        Schema::create('illiterates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('sex');
            $table->integer('day');
            $table->string('month');
            $table->integer('year');
            $table->string('place');
            $table->string('residence');
            $table->string('local')->nullable();;
            $table->string('photo');
            $table->string('tel');
            $table->string('inscripted_in')->default('محو-الأمية');
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
        Schema::dropIfExists('illiterates');
    }
};
