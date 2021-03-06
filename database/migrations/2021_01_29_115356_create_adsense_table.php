<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsense', function (Blueprint $table) {
            $table->id('img_ads1');
            $table->string('link_ads1');
            $table->integer('show_ads1');
            $table->string('img_ads2');
            $table->string('link_ads2');
            $table->integer('show_ads2');
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
        Schema::dropIfExists('adsense');
    }
}
