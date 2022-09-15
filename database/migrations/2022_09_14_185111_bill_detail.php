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
        if(!Schema::hasTable('bill_detail')){
            Schema::create('bill_detail',function(Blueprint $table){
                $table->increments('id',10);
                $table->integer('id_bill');
                $table->integer('id_product');
                $table->integer('quantity');
                $table->double('unit_price');
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
        Schema::DropIfExists('bill_detail');
    }
};
