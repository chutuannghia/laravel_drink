<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill=[
            ['id_customer'=>1,'date_order'=>'2022-10-04','total'=>45000,'payment'=>'atm','note'=>'Đơn hàng này đã thanh toán thành công'],
            ['id_customer'=>1,'date_order'=>'2022-10-05','total'=>145000,'payment'=>'atm','note'=>'Đơn hàng này đã thanh toán thành công'],
            ['id_customer'=>2,'date_order'=>'2022-06-04','total'=>300000,'payment'=>'cod','note'=>'Đơn hàng này thanh toán khi nhận hàng'],
            ['id_customer'=>2,'date_order'=>'2022-12-01','total'=>450000,'payment'=>'cod','note'=>'Đơn hàng này thanh toán khi nhận hàng'],
            ['id_customer'=>3,'date_order'=>'2022-04-04','total'=>115000,'payment'=>'cod','note'=>'Đơn hàng này thanh toán khi nhận hàng'],
        ];
        foreach($bill as $dt){
            DB::table('bills')->insert($dt);
        }
    }
}
