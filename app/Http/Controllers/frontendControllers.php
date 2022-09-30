<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type_product;
use App\Models\BIll_detail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bills;
use Illuminate\Support\Facades\Session;

class frontendControllers extends Controller
{
    //trangchu
    public function TrangChu(){
        $sonew = count(Product::where('properties',1)->get('id'));
        $sotop = count(Product::where('properties',2)->get('id'));
        $sosale = count(Product::where('promotion_price','>=',0)->get('id'));
        $sale = Product::where('promotion_price','>=',0)->paginate(4,['*'],'pagesale');
        $hot = Product::where('properties',2)->paginate(4,['*'],'pagehot');
        $new = Product::where('properties',1)->paginate(8,['*'],'pagenew');
        return view('welcome',compact('hot','new','sonew','sotop','sale','sosale'));

    }
    //san pham
    public function SanPham($id){
        $product = Product::where('id',$id)->get();
        $top = Product::where('properties',2)->take(4)->get();
        $hot = Bill_detail::SelectRaw('id_product, sum(quantity) as total')->groupby('id_product')
            ->orderByDesc('Total')->take(4)->get();
        $tt =  Product::where('id_type',$product[0]['id_type'])->paginate(3,['*'],'pagett');
        return view('product',compact('product','hot','tt','top'));
    }
    //loai san pham
    public function LoaiSanPhamid($id){
        $sonew = count(Product::where('properties',1)->where('id_type',$id)->get('id'));
        $sotop = count(Product::where('properties',2)->where('id_type',$id)->get('id'));
        $hot =  Product::where('properties',2)->where('id_type',$id)->paginate(6,['*'],'pagehot');
        $type1 = Type_Product::paginate(10,['*'],'pagetype');
        $new = Product::where('properties',1)->where('id_type',$id)->paginate(6,['*'],'pagenew');
        return view('producttype',compact('hot','new','sonew','sotop','type1'));
    }

    public function LoaiSanPham(){
        $sonew = count(Product::where('properties',1)->get('id'));
        $sotop = count(Product::where('properties',2)->get('id'));
        $hot =  Product::where('properties',2)->paginate(6,['*'],'pagehot');
        $product1 = Product::paginate(15);
        $new = Product::where('properties',1)->paginate(6,['*'],'pagenew');
        $type1 = Type_Product::paginate(10);
        return view('producttype',compact('hot','new','product1','sonew','sotop','type1'));
    }
    //gioi thieu
    public function GioiThieu(){
        return view('about');
    }
    //lien he
    public function LienHe(){
        return view('contacts');
    }

    //them vao gio hang
    public function AddToCart(Request $request,$id){
        $product = Product::find($id);
        $oldcart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldcart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function RemoveToCart($id){
        $oldcart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldcart);
        $cart->reduceByOne($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getOrderItem(){
        return view('order');
    }
    public function postOrderItem(Request $request){
        $cart = Session::get('cart');

        // Luu thong tin khach hang
        $cus = new Customer();
        $cus->name = $request->name;
        $cus->gender = $request->gender;
        $cus->email = $request->email;
        $cus->address = $request->address;
        $cus->phone_number = $request->phone_number;
        $cus->note = $request->note;
        $cus->save();

        //luu thong tin don hang
        $bill = new Bills();
        $bill->id_customer = $cus->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->payment;
        $bill->note = $request->note;
        $bill->save();

        //luu thong tin chi tiet don hang
        foreach($cart->items as $key =>$value)
        {
            $bd = new Bill_detail();
            $bd->id_product = $key;
            $bd->id_bill = $bill->id;
            $bd->quantity = $value['qty'];
            $bd->unit_price = $value['price']/$value['qty'] ;
            $bd->save();
        }
        Session::forget('cart');
        return view('notication');
    }
    public function getSearch(Request $request){
        $product = Product::where('name','like','%'.$request['key'].'%')
                            ->orwhere('unit_price','=',$request['key'])->get();
        return view('search',compact('product'));
    }
}
