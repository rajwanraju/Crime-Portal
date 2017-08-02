<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddcrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcrimes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('IncidentTitle');
            $table->integer('categoryId');
            $table->text('Description');
            $table->string('Location');
            $table->string('ExactLocation');
            $table->string('IncidentDate');
            $table->string('IncidentTime');
            $table->text('Image');
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
        Schema::dropIfExists('addcrimes');
    }
}
