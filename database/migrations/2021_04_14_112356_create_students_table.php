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
            $table->id();
            $table->string('surname');
            $table->string('othername')->nullable();
            $table->bigIncrements('appNumber');
            $table->bigIncrements('indexnum');
            $table->bigIncrements('dob');
            $table->bigIncrements('contact');
            $table->string('region');
            $table->bigIncrements('year');
            $table->bigIncrements('level');
            $table->string('programme');
            $table->string('department');
            $table->string('hall');
            $table->string('fName');
            $table->string('mName');
            $table->bigIncrements('fNumber');
            $table->bigIncrements('mNumber');
            $table->string('pic')->nullable();
            $table->string('sponsorname')->nullable();
            $table->string('sponsor_add')->nullable();
            $table->bigIncrements('sponsor_contact')->nullable();
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
