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
            $table->string('course_id')->unique();
            
            // $table->string('school_code');

            // $table->foreign('school_code')
            // ->references('school_code')
            // ->on('schools')
            // ->onDelete('cascade');
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
