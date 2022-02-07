<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSUStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_s_u_stages', function (Blueprint $table) {
            $table->id();
            $table->string('stage_id');
            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')
            ->references('student_id')->on('students');

            // $table->string('unit_id');

            // $table->foreign('unit_id')
            // ->references('unit_id')
            // ->on('units');
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
        Schema::dropIfExists('m_s_u_stages');
    }
}
