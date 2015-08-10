<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLineHadPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_line_had_page', function (Blueprint $table) {
            $table->string('page_name');
            $table->integer('product_id')->unsigned();
            $table->string('email')->default('');
            //声明联合主建
            $table->foreign('product_id')
                    ->references('product_id')->on('user_had_product')
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
        Schema::drop('product_line_had_page');
    }
}
