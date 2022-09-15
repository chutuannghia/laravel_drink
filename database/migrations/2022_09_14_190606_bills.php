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
        if(!Schema::hasTable('bills')){
            Schema::create('bills',function(Blueprint $table){
                $table->increments('id',10);
                $table->integer('id_customer');
                $table->date('date_order');
                $table->float('total');
                $table->string('payment',200);
                $table->string('note',500);
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
        Schema::DropIfExists('bills');
    }
};
