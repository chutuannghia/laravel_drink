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
        if(!Schema::hasTable('customer')){
            Schema::create('customer',function(Blueprint $table){
                $table->increments('id',10);
                $table->string('name',100);
                $table->string('gender',10);
                $table->string('email',50);
                $table->string('adress',100);
                $table->string('phone_number',20);
                $table->string('note',200);
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
        Schema::DropIfExists('customer');
    }
};
