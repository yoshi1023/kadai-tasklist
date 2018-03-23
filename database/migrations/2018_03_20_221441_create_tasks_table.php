<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('content');
            $table->string('status', 10);
            $table->timestamps();

            
        });
    }

    
    public function down()
    {
        Schema::drop('tasks');
    }
}
