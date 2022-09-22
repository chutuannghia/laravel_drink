<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=[
            ['name'=>'coca','id_type'=>'1','description'=>'Nước uống coca','unit_price'=>10000,'image'=>'coca.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'pepsi','id_type'=>'1','description'=>'Nước uống pepsi','unit_price'=>10000,'image'=>'pesi.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'7 Up','id_type'=>'1','description'=>'Nước uống 7up','unit_price'=>10000,'image'=>'7up.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'c2 trà xanh','id_type'=>'1','description'=>'Nước uống c2 trà xanh','unit_price'=>10000,'image'=>'c2.jpg','unit'=>'chai','properties'=>'0'],
            ['name'=>'c2 táo','id_type'=>'1','description'=>'Nước uống c2 táo','unit_price'=>10000,'image'=>'c2tao.jpg','unit'=>'chai','properties'=>'2'],
            ['name'=>'Dr.thanh','id_type'=>'1','description'=>'Nước uống DR.Thanh','unit_price'=>10000,'image'=>'drthanh.jpg','unit'=>'chai','properties'=>'0'],
            ['name'=>'Wake-up 247','id_type'=>'1','description'=>'Nước uống wake-up 247','unit_price'=>10000,'image'=>'247.jpg','unit'=>'chai','properties'=>'0'],

            ['name'=>'Coca không Đường','id_type'=>'2','description'=>'Nước uống coca không đường','unit_price'=>10000,'image'=>'cocaid.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'pepsi không Đường','id_type'=>'2','description'=>'Nước uống pepsi không đường','unit_price'=>10000,'image'=>'pesiid.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'7up Không dường','id_type'=>'2','description'=>'Nước uống 7up không đường','unit_price'=>10000,'image'=>'7upid.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'all free','id_type'=>'2','description'=>'Nước uống all free không đường','unit_price'=>10000,'image'=>'afri.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'Vĩnh hảo','id_type'=>'2','description'=>'Nước uống vĩnh hảo','unit_price'=>'7000','image'=>'vh.jpg','unit'=>'chai','properties'=>'2'],
            ['name'=>'Sprite','id_type'=>'2','description'=>'Nước uống sprite không đường','unit_price'=>10000,'image'=>'sprite.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'fanta cam','id_type'=>'2','description'=>'Nước uống fanta cam không đường','unit_price'=>10000,'image'=>'fanta.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'Monster','id_type'=>'2','description'=>'Nước uống monster không đường','unit_price'=>'28000','image'=>'monster.jpg','unit'=>'lon','properties'=>'1'],

            ['name'=>'coca','id_type'=>'3','description'=>'Nước uống có ga coca','unit_price'=>10000,'image'=>'coca.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'pepsi','id_type'=>'3','description'=>'Nước uống có ga pepsi','unit_price'=>10000,'image'=>'pesi.jpg','unit'=>'lon','properties'=>'0'],
            ['name'=>'7 Up','id_type'=>'3','description'=>'Nước uống có ga 7up','unit_price'=>10000,'image'=>'7up.jpg','unit'=>'lon','properties'=>'1'],
            ['name'=>'c2 trà xanh','id_type'=>'3','description'=>'Nước uống có ga c2 trà xanh','unit_price'=>10000,'image'=>'c2.jpg','unit'=>'chai','properties'=>'2'],
            ['name'=>'c2 táo','id_type'=>'3','description'=>'Nước uống có ga c2 táo','unit_price'=>10000,'image'=>'c2tao.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'Dr.thanh','id_type'=>'3','description'=>'Nước uống có ga DR.Thanh','unit_price'=>10000,'image'=>'drthanh.jpg','unit'=>'chai','properties'=>'2'],
            ['name'=>'Wake-up 247','id_type'=>'3','description'=>'Nước uống có ga wake-up 247','unit_price'=>10000,'image'=>'247.jpg','unit'=>'chai','properties'=>'0'],

            ['name'=>'c2 trà xanh','id_type'=>'4','description'=>'Nước uống c2 trà xanh','unit_price'=>10000,'image'=>'c2.jpg','unit'=>'chai','properties'=>'0'],
            ['name'=>'c2 táo','id_type'=>'4','description'=>'Nước uống c2 táo','unit_price'=>10000,'image'=>'c2tao.jpg','unit'=>'chai','properties'=>'2'],
            ['name'=>'c2 chanh','id_type'=>'4','description'=>'Nước uống c2 chanh','unit_price'=>10000,'image'=>'c2chanh.jpg','unit'=>'chai','properties'=>'0'],
            ['name'=>'Ô long tea plus','id_type'=>'4','description'=>'Nước uống tea plus táo','unit_price'=>10000,'image'=>'teaplus.jpg','unit'=>'chai','properties'=>'0'],
            ['name'=>'Ô long chanh','id_type'=>'4','description'=>'Nước uống ô long chanh','unit_price'=>10000,'image'=>'olongchanh.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'Fuze tea','id_type'=>'4','description'=>'Nước uống fuze tea','unit_price'=>10000,'image'=>'tradao.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'trà đào cam sả','id_type'=>'4','description'=>'Nước uống trà đào cam sả','unit_price'=>'20000','image'=>'tradaocamsa.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'Sữa chua hoa quả','id_type'=>'4','description'=>'Nước uống hoa quả','unit_price'=>'30000','image'=>'suachuahu.jpg','unit'=>'hũ','properties'=>'1'],

            ['name'=>'Sữa tươi vinamil','id_type'=>'5','description'=>'vinamil','unit_price'=>'8000','image'=>'vinamil.jpg','unit'=>'bịch','properties'=>'0'],
            ['name'=>'Sữa tươi vinamil dâu','id_type'=>'5','description'=>'vinamil','unit_price'=>'8000','image'=>'vinamildau.jpg','unit'=>'bịch','properties'=>'0'],
            ['name'=>'Sữa tươi vinamil socola','id_type'=>'5','description'=>'vinamil','unit_price'=>'8000','image'=>'vinamisocola.jpg','unit'=>'bịch','properties'=>'0'],
            ['name'=>'Sữa tươi TH True milk thùng','id_type'=>'5','description'=>'th true milk thùng','unit_price'=>'300000','image'=>'ththung.jpg','unit'=>'thùng','properties'=>'0'],
            ['name'=>'TH true milk','id_type'=>'5','description'=>'vinamil','unit_price'=>10000,'image'=>'thtruemilk.jpg','unit'=>'hộp','properties'=>'0'],
            ['name'=>'nutriboost','id_type'=>'5','description'=>'nutriboost','unit_price'=>10000,'image'=>'nutriboost.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'nutriboost cam','id_type'=>'5','description'=>'nutriboost cam','unit_price'=>10000,'image'=>'nutricam.jpg','unit'=>'chai','properties'=>'0'],

            ['name'=>'vfresh','id_type'=>'6','description'=>'vfresh','unit_price'=>'12000','image'=>'vfresh.jpg','unit'=>'hộp','properties'=>'2'],
            ['name'=>'vfresh cam','id_type'=>'6','description'=>'vfresh cam','unit_price'=>10000,'image'=>'vfreshcam.jpg','unit'=>'hộp','properties'=>'2'],
            ['name'=>'vfresh táo','id_type'=>'6','description'=>'vfresh táo','unit_price'=>'11000','image'=>'vfreshtao.jpg','unit'=>'hộp','properties'=>'1'],
            ['name'=>'vfresh trái cây sữa','id_type'=>'6','description'=>'vfresh trái cây sữa','unit_price'=>10000,'image'=>'vfreshsua.jpg','unit'=>'hộp','properties'=>'1'],
            ['name'=>'TH true milk','id_type'=>'6','description'=>'vinamil','unit_price'=>10000,'image'=>'thtruemilk.jpg','unit'=>'hộp','properties'=>'0'],
            ['name'=>'nutriboost','id_type'=>'6','description'=>'nutriboost','unit_price'=>10000,'image'=>'nutriboost.jpg','unit'=>'chai','properties'=>'1'],
            ['name'=>'nutriboost cam','id_type'=>'6','description'=>'nutriboost cam','unit_price'=>10000,'image'=>'nutricam.jpg','unit'=>'chai','properties'=>'0'],

            ['name'=>'Nước ép ổi','id_type'=>'7','description'=>'Nước ép ổi','unit_price'=>'20000','image'=>'epoi.jpg','unit'=>'ly','properties'=>'0'],
            ['name'=>'Nước ép táo','id_type'=>'7','description'=>'Nước ép táo','unit_price'=>'20000','image'=>'eptao.jpg','unit'=>'ly','properties'=>'1'],
            ['name'=>'Nước ép xoài','id_type'=>'7','description'=>'Nước ép xoài','unit_price'=>'20000','image'=>'epxoai.jpg','unit'=>'ly','properties'=>'0'],
            ['name'=>'Nước ép cà rốt','id_type'=>'7','description'=>'Nước ép cà rốt','unit_price'=>'20000','image'=>'carot.jpg','unit'=>'ly','properties'=>'0'],
            ['name'=>'Nước ép dứa','id_type'=>'7','description'=>'Nước ép dứa','unit_price'=>'20000','image'=>'epdua.jpg','unit'=>'ly','properties'=>'0'],



        ];
        foreach($product as $pr){
            DB::table('products')->insert($pr);
        }
    }
}
