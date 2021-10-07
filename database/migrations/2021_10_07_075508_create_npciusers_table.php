<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpciusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npciusers', function(Blueprint $table)
        { 
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username');
            $table->string('organisation');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            
            
        
        
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
