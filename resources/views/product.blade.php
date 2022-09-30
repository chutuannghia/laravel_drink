@extends('layout.master')
@section('title','Sản phẩm')
@section('content')
<div class="rev-slider">
    @include('layout.slider')
                <!--slider-->
</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="./resources/image/{{$product[0]['image']?$product[0]['image']:'stock.png'}}" alt="{{$product[0]['name']}}">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title h2" style="color:orangered;font-weight:bold;font-size:18px">{{$product[0]['name']}}</p>
                            <p class="single-item-price" style="color:rgb(0, 255, 34);font-weight:bold;font-size:16px">
                                @if ($product[0]['promotion_price'] != null)
                                <span>{{$product[0]['promotion_price']}} đ</span>
                                @else
                                <span>{{$product[0]['unit_price']}} đ</span>
                                @endif
                            </p>
                        </div>

                        <div class="clearfix">{{$product[0]->Type_product['name']}}</div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p></p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Lựa chọn:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="loai">
                                <option value="{{$product[0]['unit']}}" selected>{{$product[0]['unit']}}</option>
                                @if ($product[0]['unit'] != 'thùng')
                                <option value="thung">Thùng</option>
                                @endif
                            </select>
                            <a class="add-to-cart" href="{{route('addtocart',$product[0]['id'])}}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space20">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        <li><a href="#tab-reviews">Giới thiệu (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$product[0]['description']}}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>Chưa được đánh giá</p>
                    </div>
                </div>
                <div class="space20">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm tương tự</h4>

                    <div class="row">
                        @foreach ($tt as $t)
                        <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{route('sanpham',$t->id)}}"><img src="./resources/image/{{$t->image?$t->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$t->name}}"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:{{route('sanpham',$t->id)}}FE9A2E">{{$t->name}}</span></p>
                                    <p class="single-item-price">
                                        <span class="font-bold text-primary">{{number_format($t->unit_price)}}</span> đ
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('sanpham',$t->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="my-2">
                        {{ $tt->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm đang hót</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($top as $ht)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{route('sanpham',$ht->id)}}"><img src="./resources/image/{{$ht->image?$ht->image:'stock.png'}}" alt="{{$ht->name}}"></a>
                                <div class="media-body">
                                    {{$ht->name}} <br>
                                    <span class="beta-sales-price">
                                        @if ($ht->promotion_price == null)
                                        <span class="font-bold text-danger">{{number_format($ht->unit_price)}}</span> đ
                                        @else
                                        <span class="flash-del">{{number_format($ht->unit_price)}} đ</span> <br>
                                        <span class="flash-sale" style="color:chartreuse;font-weight:bold">{{number_format($ht->promotion_price)}} đ</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm bán chạy</h3>
                    <div class="widget-body">
                        @foreach ($hot as $item)
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{route('sanpham',$item->Product->id)}}"><img src="./resources/image/{{$item->Product->image?$item->Product->image:'stock.png'}}" alt="{{$item->Product->name}}"></a>
                                <div class="media-body">
                                    {{$item->Product->name}} <br>
                                    <span class="beta-sales-price">
                                        @if ($item->Product->promotion_price == null)
                                        <span class="font-bold text-danger">{{number_format($item->Product->unit_price)}}</span> đ
                                        @else
                                        <span class="flash-del">{{number_format($item->Product->unit_price)}} đ</span> <br>
                                        <span class="flash-sale" style="color:chartreuse;">{{number_format($item->Product->promotion_price)}} đ</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
@section('script')
<script>
    jQuery(document).ready(function($) {
               'use strict';

// color box

//color
     jQuery('#style-selector').animate({
     left: '-213px'
   });

   jQuery('#style-selector a.close').click(function(e){
     e.preventDefault();
     var div = jQuery('#style-selector');
     if (div.css('left') === '-213px') {
       jQuery('#style-selector').animate({
         left: '0'
       });
       jQuery(this).removeClass('icon-angle-left');
       jQuery(this).addClass('icon-angle-right');
     } else {
       jQuery('#style-selector').animate({
         left: '-213px'
       });
       jQuery(this).removeClass('icon-angle-right');
       jQuery(this).addClass('icon-angle-left');
     }
   });
               });
   </script>
@endsection
