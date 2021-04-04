<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            $table->integer('admin');
            $table->string('fullname', 50);
            $table->string('surname', 50);
            $table->integer('nationalid');
            $table->string('speciality', 50);
            $table->string('email', 50);
            $table->integer('age');
            $table->string('guardianfname', 50);
            $table->integer('guarrdian_nationalid')->nullable();
            $table->integer('guardian_mobile')->nullable();


            $table->timestamps();
            //$table->primary(array('id', 'admin'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms');
    }
}