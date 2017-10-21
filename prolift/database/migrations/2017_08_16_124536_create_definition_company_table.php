<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitionCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definition_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('content1');
            $table->string('content2');
            $table->string('content3');
            $table->string('titleC');
            $table->string('sub_titleC');
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
