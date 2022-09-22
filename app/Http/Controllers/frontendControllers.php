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
        $sonew = count(Product::where('properties',1)->get('id'));
        $sotop = count(Product::where('properties',2)->get('id'));
        $sosale = count(Product::where('promotion_price','>=',0)->get('id'));
        $sale = Product::where('promotion_price','>=',0)->paginate(6);
        $hot = Product::where('properties',2)->paginate(6);
        $slider = Slider::get('image');
        $new = Product::where('properties',1)->paginate(6);
        return view('welcome',compact('hot','slider','new','sonew','sotop','sale','sosale'));

    }
    //san pham
    public function SanPham($id){
        $product = Product::where('id',$id)->get();
        $new = Product::where('properties',1)->take(4)->get();
        $top = Product::where('properties',2)->take(4)->get();
        $tt =  Product::where('id_type',$product[0]['id_type'])->paginate(3);
        $slider = Slider::get('image');
        return view('product',compact('product','slider','new','tt','top'));
    }
    //loai san pham
    public function LoaiSanPhamid($id){
        $sonew = count(Product::where('properties',1)->where('id_type',$id)->get('id'));
        $sotop = count(Product::where('properties',2)->where('id_type',$id)->get('id'));
        $hot =  Product::where('properties',2)->where('id_type',$id)->paginate(3);
        $type1 = Type_Product::paginate(10);
        $product1 = Product::paginate(15);
        $new = Product::where('properties',1)->where('id_type',$id)->paginate(3);
        $slider = Slider::get('image');
        return view('producttype',compact('hot','slider','new','product1','sonew','sotop','type1'));
    }

    public function LoaiSanPham(){
        $sonew = count(Product::where('properties',1)->get('id'));
        $sotop = count(Product::where('properties',2)->get('id'));
        $hot =  Product::where('properties',2)->paginate(3);
        $product1 = Product::paginate(15);
        $new = Product::where('properties',1)->paginate(3);
        $slider = Slider::get('image');
        $type1 = Type_Product::paginate(10);
        return view('producttype',compact('hot','slider','new','product1','sonew','sotop','type1'));
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
