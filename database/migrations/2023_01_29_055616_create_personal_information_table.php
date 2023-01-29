<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birthday');
            $table->string('nationality');
            $table->string('religion');
            $table->string('hobby')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('nid')->nullable();

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
        Schema::dropIfExists('personal_information');
    }
}
