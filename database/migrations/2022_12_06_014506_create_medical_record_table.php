<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('disease');
            $table->string('description');
            $table->unsignedBigInteger('medicine1');
            $table->foreign('medicine1')->references('id')->on('medicine');
            $table->unsignedBigInteger('medicine2')->nullable();
            $table->foreign('medicine2')->references('id')->on('medicine');
            $table->unsignedBigInteger('medicine3')->nullable();
            $table->foreign('medicine3')->references('id')->on('medicine');
            $table->unsignedBigInteger('medicine4')->nullable();
            $table->foreign('medicine4')->references('id')->on('medicine');
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
        Schema::dropIfExists('medical_record');
    }
}
