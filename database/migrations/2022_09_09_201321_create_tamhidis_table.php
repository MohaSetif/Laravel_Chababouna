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
        Schema::create('tamhidids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('sex');
            $table->string('job');
            $table->string('DadJob')->nullable();
            $table->string('MomJob')->nullable();
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('place');
            $table->string('residence');
            $table->string('photo');
            $table->string('local')->nullable();;
            $table->string('inscripted_in')->default('التمهيدي');
            $table->string('tel');
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
        Schema::dropIfExists('tamhidis');
    }
};
