<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider=[
            ['link'=>'banner1.com','image'=>'banner1.jpg'],
            ['link'=>'banner2.com','image'=>'banner2.jpg'],
            ['link'=>'banner3.com','image'=>'banner3.jpg'],
            ['link'=>'banner4.com','image'=>'banner4.jpg'],

        ];
        foreach($slider as $sl){
            DB::table('slider')->insert($sl);
        }
    }
}
