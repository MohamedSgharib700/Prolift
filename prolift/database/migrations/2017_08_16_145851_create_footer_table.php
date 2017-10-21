<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('link_title1');
            $table->string('link_title2');
            $table->string('title2');
            $table->string('phone');
            $table->string('link_title3');
            $table->string('logo');
            $table->string('url_face');
            $table->string('url_twitter');
            $table->string('url_instagram');
            $table->string('url_title1');
            $table->string('url_title2');
            $table->string('url_title3');
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
        //
    }
}
