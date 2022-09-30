<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Type_product;
use App\Models\Cart;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        //share type
        View()->composer('layout.header', function ($view) {
            $type = Type_Product::all();
            $view->with('type', $type);
        });

        View()->composer(['layout.header','order'], function ($view) {
           if(Session('cart')){
            $oldcart = Session::get('cart');
            $cart = new Cart($oldcart);
            $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,
            'toltalPrice'=>$cart->totalPrice,'totalqty'=>$cart->totalQty]);
           }
        });
        View()->composer('layout.slider', function ($view) {
            $slider = Slider::get('image');
            $view->with('slider', $slider);
        });
        View()->composer('layout.footer', function ($view) {
            $footer = Product::where('properties',2)->take(6)->get();
            $view->with('footer', $footer);
        });
    }
}
