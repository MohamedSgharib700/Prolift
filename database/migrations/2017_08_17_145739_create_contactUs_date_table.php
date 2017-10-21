<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactUs_detes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_page');
            $table->string('title_face');
            $table->string('title_twitter');
            $table->string('title_linkadin');
            $table->string('title_mail1');
            $table->string('title_mail2');
            $table->string('title_mail3');
            $table->string('title_phone1');
            $table->string('title_phone2');
            $table->string('title_phone3');
            $table->string('title_address1');
            $table->string('title_address2');
            $table->string('title_address3');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('url_face');
            $table->string('url_twitter');
            $table->string('url_linkadin');
            $table->string('url_mail1');
            $table->string('url_mail2');
            $table->string('url_mail3');
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
