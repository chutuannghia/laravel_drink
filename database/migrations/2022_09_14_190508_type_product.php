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
        if(!Schema::hasTable('type_product')){
            Schema::create('type_product',function(Blueprint $table){
                $table->increments('id',10);
                $table->string('name',100);
                $table->text('description');
                $table->string('image',225);
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
        Schema::DropIfExists('type_product');
    }
};
