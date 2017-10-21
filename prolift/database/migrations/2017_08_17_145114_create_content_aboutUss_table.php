<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentAboutUssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_abotutUss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titles');
            $table->string('content');
            $table->string('images');
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
