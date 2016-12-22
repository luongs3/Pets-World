<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name', 100);
            $table->string('avatar', 200)->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('disease')->nullable();
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
