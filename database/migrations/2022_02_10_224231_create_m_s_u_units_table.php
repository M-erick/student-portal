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
            $table->increments('id');
            $table->string('unit_name');
            $table->string('unit_code')->unique();
            $table->string('course_name');
            $table->string('stage_id');



            // $table->timestamps();
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
