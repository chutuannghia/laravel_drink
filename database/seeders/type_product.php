<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class type_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type=[
            ['name'=>'Nước ngọt có đường','description'=>'Nước uống có đường','image'=>'coduong.jpg'],
            ['name'=>'Nước ngọt không đường','description'=>'Nước uống có lượng đường không dành cho người hạn chế đường','image'=>'itduong.jpg'],
            ['name'=>'Có ga','description'=>'Nước uống có ga','image'=>'coga.jpg'],
            ['name'=>'Không ga','description'=>'Nước uống không có ga','image'=>'coduong.jpg'],
            ['name'=>'Sữa tươi','description'=>'Sữa tươi Có bịch và chai','image'=>'sữa tươi.jpg'],
            ['name'=>'Sữa trái cây','description'=>'Sữa tươi kết hợp với trái cây tăng thêm vitamin và khoáng chất','image'=>'suatraicay.jpg'],
            ['name'=>'Nước ép trái cây','description'=>'Nước ép trái cây tươi ngon nhiều chất dinh dương vitamin','image'=>'nuocep.jpg'],

        ];
        foreach($type as $tp){
            DB::table('type_product')->insert($tp);
        }
    }
}
