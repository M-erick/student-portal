<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSUCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_s_u_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->unsignedBigInteger('school_id');

            $table->foreign('school_id')
            ->references('school_id')
            ->on('school')
            ->onDelete('cascade');
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
        Schema::dropIfExists('m_s_u_courses');
    }
}
