<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nutritions extends Migration
{
    
    public function up()
    {
        Schema::create('nutritions',function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('kcal')->nullable();
            $table->string('tou')->nullable();
            $table->string('shitu')->nullable();
            $table->string('tanpaku')->nullable();
            $table->string('bitaminc')->nullable();
            $table->string('bitaminb1')->nullable();
            $table->string('bitaminb6')->nullable();
        });  
    }

    public function down()
    {
        Schema::dropIfExists('nutritions'); 
    }
}
