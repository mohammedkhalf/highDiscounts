<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_type');
            $table->integer('dep_id');
            $table->string('ar_title');
            $table->string('en_title');
            $table->longtext('en_content');
            $table->longtext('ar_content');
             $table->string('price');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('photo');
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
        Schema::drop('cart');
    }
}
