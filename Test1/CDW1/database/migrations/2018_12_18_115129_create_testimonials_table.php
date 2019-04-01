<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //testmon_id, testmon_name, testmon_avatar, testmon_description, testmon_position
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('testmon_id');
            $table->string('testmon_name');
            $table->string('testmon_avatar');
            $table->string('testmon_description');
            $table->string('testmon_position');
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
        Schema::dropIfExists('testimonials');
    }
}
