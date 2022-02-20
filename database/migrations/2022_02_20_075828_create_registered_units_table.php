<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_units', function (Blueprint $table) {
            $table->increments('RegNumber');
            $table->string('Admission');
            $table->string('Unit_code');
            $table->timestamps();
            $table->foreign('Admission')
                ->references('Admission')
                ->on('students')
                ->onDelete('cascade');
            $table->foreign('Unit_code')
                ->references('Unit_code')
                ->on('units')
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
        Schema::dropIfExists('registered_units');
    }
}
