<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->string('Admission');
            $table->integer('Cat_marks');
            $table->integer('Main_marks');
            $table->string('Unit_code');
            $table->integer('Total_marks');
            $table->string('Grade');
            $table->timestamps();
            $table->foreign('Admission')
                ->references('Admission')
                ->on('students')
                ->onDelete('cascade');

            $table->foreign('Unit_code')
                ->references('Unit_code')
                ->on('registered_units')
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
        Schema::dropIfExists('results');
    }
}
