<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsers extends Migration
{
    
    public function up()
    {
        schema::table('users', function ($table){
            $table->after('email', function ($table){
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
            });
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function (Blueprint $table){
            $table->dropColumn('surname');
            $table->dropColumn('othername')->nullable();
            $table->dropColumn('appNumber');
            $table->dropColumn('indexnum');
            $table->dropColumn('dob');
            $table->dropColumn('contact');
            $table->dropColumn('region');
            $table->dropColumn('year');
            $table->dropColumn('level');
            $table->dropColumn('programme');
            $table->dropColumn('department');
            $table->dropColumn('hall');
            $table->dropColumn('fName');
            $table->dropColumn('mName');
            $table->dropColumn('fNumber');
            $table->dropColumn('mNumber');
            $table->dropColumn('pic');
            $table->dropColumn('sponsorname');
            $table->dropColumn('sponsor_add');
            $table->dropColumn('sponsor_contact');
            $table->dropColumn('sponsor_email');
        });
    }
}
