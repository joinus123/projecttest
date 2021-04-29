<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesetting', function (Blueprint $table) {
            $table->id();
            $table->string('Site_title');
            $table->string('Email_address');
            $table->string('Phone_number');
            $table->string('Address');
            $table->string('Currency');
            $table->string('Footer_copyright_text');
            $table->string('Footer_text');
            $table->string('Footer_image');
            $table->string('Header_logo');
            $table->string('Footer_logo');
            $table->string('Fav_icon');
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
        Schema::dropIfExists('sitesetting');
    }
}
