<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('othername')->nullable();
            $table->integer('appNumber');
            $table->integer('indexnum');
            $table->integer('dob');
            $table->integer('contact');
            $table->string('region');
            $table->integer('year');
            $table->integer('level');
            $table->string('programme');
            $table->string('department');
            $table->string('hall');
            $table->string('fName');
            $table->string('mName');
            $table->integer('fNumber');
            $table->integer('mNumber');
            $table->string('pic')->nullable();
            $table->string('sponsorname')->nullable();
            $table->string('sponsor_add')->nullable();
            $table->integer('sponsor_contact')->nullable();
            $table->string('sponsor_email')->nullable();
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
        Schema::dropIfExists('students');
    }
}
