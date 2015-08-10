<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHadProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_had_product', function (Blueprint $table) {
            $table->increments("product_id",1000);
            $table->string('product_name');
            $table->integer('user_id')->unsigned();
            $table->text('description')->default('');
            $table->string('email');
            //声明联合主建
            $table->foreign('user_id')
                    ->references('id')->on('users')
                        ->onDelete('cascade');
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
        Schema::drop('user_had_product');
    }
}
