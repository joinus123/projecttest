<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Homepage', function (Blueprint $table) {

            $table->bigIncrements('home_page_id');
            $table->string('section_one_logo');
            $table->string('section_one_text');
            $table->string('section_one_banner');
            $table->string('section_one_box1_heading');
            $table->string('section_one_box1_text');
            $table->string('section_one_box2_heading');
            $table->string('section_one_box2_text');
            $table->string('section_one_box3_heading');
            $table->string('section_one_box3_text');
            $table->string('section_two_heading');
            $table->string('section_two_text');
            $table->string('section_three_heading');
            $table->string('section_three_image');
            $table->string('section_four_heading');
            $table->string('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage');
    }
}
