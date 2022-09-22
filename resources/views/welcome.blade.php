@extends('layout.master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space20">&nbsp;</div>
                <!-- sanphamsale -->
                <div class="beta-products-list">
                    <h4>Sản phẩm sale</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">{{$sosale}} Sản phẩm sale</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="row">
                        @foreach ($sale as $s)
                            <div class="col-sm-2" style="padding-bottom: 20px">
                                <div class="single-item">
                                    @if ($s->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$s->id)}}"><img src="./resources/image/{{$s->image}}" class="image-fluid" height="180" alt="{{$s->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$s->name}}</span></p>
                                        <p class="single-item-price">
                                            @if ($s->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($s->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($s->unit_price)}} đ</span>
                                            <span class="flash-sale" class="font-bold text-primary>{{number_format($s->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$s->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-2">
                        {{ $sale->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->
                <div class="space10">&nbsp;</div>

                <div class="beta-products-list">
                    <h4>Sản phẩm mới</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">{{$sonew}} Sản phẩm mới</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="row">
                        @foreach ($new as $n)
                            <div class="col-sm-2" style="padding-bottom: 20px">
                                <div class="single-item">
                                    @if ($n->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$n->id)}}"><img src="./resources/image/{{$n->image}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$n->name}}</span></p>
                                        <p class="single-item-price">
                                            @if ($n->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($n->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($n->unit_price)}} đ</span>
                                            <span class="flash-sale" class="font-bold text-primary>{{number_format($n->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$n->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-2">
                        {{ $new->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->

                <div class="space10">&nbsp;</div>

                <div class="beta-products-list">
                    <h4>Sản phâm hót</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">{{$sotop}} sản phẩm hót</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        @foreach ($hot as $pr)
                            <div class="col-sm-2" style="padding-bottom: 20px">
                                <div class="single-item">
                                    @if ($pr->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$pr->id)}}"><img src="./resources/image/{{$pr->image}}" class="image-fluid" height="180" alt="{{$pr->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$pr->name}}</span></p>
                                        <p class="single-item-price">
                                            @if ($pr->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($pr->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($pr->unit_price)}} đ</span>
                                            <span class="flash-sale" class="font-bold text-primary>{{number_format($pr->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$pr->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-2">
                        {{ $hot->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->
        </div> <!-- .main-content -->
    </div> <!-- scontent -->
</div> <!-- .container -->
@endsection
