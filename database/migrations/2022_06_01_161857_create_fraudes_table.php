<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->string('type');
            $table->string('matiere');
            $table->date('date');
            $table->string('lieu');
            $table->time('heure');
            $table->string('surveillant');
            $table->string('note');
            $table->string('image');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->timestamps();
            //$table->engine = 'InnoDB'; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fraudes');
    }
}
