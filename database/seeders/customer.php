<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer= [
            ['name'=>'Nguyễn Văn A','gender'=>'Nam','email'=>'vanapeo@gmail.com','adress'=>'123 Nguyễn Văn Tần , Quận 7, HCM','phone_number'=>'0900225554','note'=>'thành viên vàng'],
            ['name'=>'Nguyễn Văn b','gender'=>'Nam','email'=>'vanbc1@gmail.com','adress'=>'123 Võ Văn Tần , Quận 3, HCM','phone_number'=>'08855545544','note'=>'thành viên bạc'],
            ['name'=>'Nguyễn thị thùy','gender'=>'Nữ','email'=>'thuykute123@gmail.com','adress'=>'112 Nguyễn DU, Đà Nẵng','phone_number'=>'09002454441','note'=>'thành viên vàng'],
            ['name'=>'Trần Thanh Trúc','gender'=>'Nữ','email'=>'trucxinhxinh@gmail.com','adress'=>'123 Võ Văn hai , Quận 7 HCM','phone_number'=>'0896786754','note'=>'thành viên mới'],
            ['name'=>'Nguyễn Thành Nam','gender'=>'Nam','email'=>'Namximang@gmail.com','adress'=>'16 Nguyễn văn Cừ , Quận 1, HCM','phone_number'=>'0922222211','note'=>'thành viên bạch kim'],
            ['name'=>'Bảo Ngọc','gender'=>'Nữ','email'=>'ngochotgirl@gmail.com','adress'=>'24 Nguyễn Huệ , Huế','phone_number'=>'0911221212','note'=>'thành viên mới'],
            ['name'=>'Đặng Thanh Thiên','gender'=>'Nam','email'=>'thanhthien112@gmail.com','adress'=>'76 Nguyễn Oanh , Quận Gò Vấp, HCM','phone_number'=>'0232233334','note'=>'thành viên vàng'],
            ['name'=>'Bùi Hữu Lượng','gender'=>'Nam','email'=>'luongmatpho@gmail.com','adress'=>'123 Nguyễn Thị Thật , Quận 7 ,HCM','phone_number'=>'090022342342','note'=>'thành viên Đồng'],
            ['name'=>'Nguyễn Trung Kiên','gender'=>'Nam','email'=>'trungkienphoco@gmail.com','adress'=>'112 Phố cổ , Quận 14, Hội An','phone_number'=>'0900112234','note'=>'thành viên Mới'],
            ['name'=>'Nguyễn Thanh Nhiên','gender'=>'Nữ','email'=>'honnhien1232@gmail.com','adress'=>'34 Nguyễn Thị Minh Khai , Quận 1 HCM','phone_number'=>'0876655554','note'=>'thành viên vàng'],
            
        ];
        foreach($customer as $cus){
            DB::table('customer')->insert($cus);
        }
    }
}
