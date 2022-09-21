<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type_product;

class frontendControllers extends Controller
{
    //trangchu
    public function TrangChu(){
        $product = Product::take(8)->get();
        $type = Type_Product::all();
        $slider = Slider::get('image');
        $new = Product::where('new',1)->take(4)->get();
        return view('welcome',compact('product','slider','type','new'));

    }
    //san pham
    public function SanPham(){
        $product = Product::take(8)->get();
        $new = Product::where('new',1)->take(4)->get();
        $type = Type_Product::all();
        $slider = Slider::get('image');
        return view('product',compact('product','type','slider','new'));
    }
    //san pham chi tiet
    public function LoaiSanPham(){
        $product = Product::take(3)->get();
        $product1 = Product::paginate(15);
        $new = Product::where('new',1)->take(3)->get();
        $type = Type_Product::all();
        $slider = Slider::get('image');
        return view('producttype',compact('product','type','slider','new','product1'));
    }
    //gioi thieu
    public function GioiThieu(){
        $slider = Slider::get('image');
        return view('about',compact('slider'));
    }
    //lien he
    public function LienHe(){
        $slider = Slider::get('image');
        return view('contacts',compact('slider'));
    }
}
