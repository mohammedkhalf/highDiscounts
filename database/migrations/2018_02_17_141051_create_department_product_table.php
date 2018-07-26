<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_products', function (Blueprint $table){
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('ar_name');
            $table->string('en_name');
<<<<<<< HEAD
            $table->integer('parent')->default(0);
=======
            $table->integer('parent')->nullable();
>>>>>>> b14ce5cc5a240e6070c5046e0efe1d9c2171ea73
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
        Schema::drop('department_products');
    }
}
