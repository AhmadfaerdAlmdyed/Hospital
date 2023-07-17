<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
           $table->string('name');
           $table->string('email')->unique();
           $table->string('phone')->unique();
           $table->string('cover')->unique();
           $table->string('descrption')->nullable();
           $table->unsignedBigInteger('hospital_id')->nullable();
           $table->foreign('hosptial_id')->on('hosptials')->references('id');
            $table->timestamps();
        });
    }

    // name
    // email
    // major_id
    // hopital_id
    // phone
    // cover
    // rate
    // descrption
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
