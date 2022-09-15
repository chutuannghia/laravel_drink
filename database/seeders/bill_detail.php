<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bill_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill_detail=[
            ['id_bill'=>1,'id_product'=>1,'quantity'=>1,'unit_price'=>15000],
            ['id_bill'=>1,'id_product'=>2,'quantity'=>3,'unit_price'=>30000],
            ['id_bill'=>1,'id_product'=>1,'quantity'=>1,'unit_price'=>20000],
            ['id_bill'=>2,'id_product'=>2,'quantity'=>3,'unit_price'=>10000],
            ['id_bill'=>2,'id_product'=>1,'quantity'=>3,'unit_price'=>40000],
            ['id_bill'=>3,'id_product'=>2,'quantity'=>3,'unit_price'=>30000],
            ['id_bill'=>3,'id_product'=>2,'quantity'=>3,'unit_price'=>45000]
        ];
        foreach($bill_detail as $dt){
            DB::table('bill_detail')->insert($dt);
        }
    }
}
