<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){
            Schema::create('products',function(Blueprint $table){
                $table->increments('id',10);
                $table->string('name',100);
                $table->integer('id_type');
                $table->string('description');
                $table->float('unit_price');
                $table->float('promotion_price');
                $table->string('image',225);
                $table->string('unit',255);
                $table->integer('new');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::DropIfExists('products');
    }
};
