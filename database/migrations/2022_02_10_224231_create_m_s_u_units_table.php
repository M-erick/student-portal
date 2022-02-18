<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSUUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_s_u_units', function (Blueprint $table) {
            $table->string('unit_code')->unique();
            $table->string('unit_name');
            $table->string('course_code');

            $table->foreign('course_code')
            ->references('course_code')
            ->on('m_s_u_courses')
            ->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_s_u_units');
    }
}
