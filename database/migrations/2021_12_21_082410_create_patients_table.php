<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('patient');
            $table->string('name');
            $table->string('gender');
            $table->string('dob');
            $table->string('occupation');
            $table->string('relative');
            $table->string('rname');
            $table->integer('phone');
            $table->integer('home-phone');
            $table->string('blood');
            $table->string('religion');
            $table->string('address');
            $table->string('doctor');
            $table->string('bed');
            $table->string('image');
            $table->string('symptoms');
            $table->string('username');
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
        Schema::dropIfExists('patients');
    }
}
