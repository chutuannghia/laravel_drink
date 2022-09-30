@extends('layout.master')
@section('title','TN Drink')
@section('content')
<div class="rev-slider">
    @include('layout.slider')                <!--slider-->
</div>
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
                            <div class="col-sm-3" style="padding-bottom: 20px" style="font-size: 18px">
                                <div class="single-item" style="height: 300px">
                                    @if ($s->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$s->id)}}"><img src="./resources/image/{{$s->image?$s->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$s->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px">{{$s->name}}</span></p>
                                        <p class="single-item-price" style="height: 60px;margin:auto 0px">
                                            @if ($s->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($s->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($s->unit_price)}} đ</span>
                                            <br>
                                            <span class="flash-sale font-bold text-primary">{{number_format($s->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addtocart',$s->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$s->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-2">
                        {{ $sale->appends(['pagehot'=>$hot->currentPage(),'pagenew'=>$new->currentPage()])->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->
                <div class="space10">&nbsp;</div>

                <div class="beta-products-list">
                    <h4>Sản phẩm mới</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">{{$sonew}} Sản phẩm mới</p>
                        <div class="clearfix"></div>
                    </div>
                    @php
                        $demn = 1;
                    @endphp
                    @foreach ($new as $n)
                        @if ($demn == 1 || $demn % 4 == 0)
                        <div class="row">
                        @endif
                            <div class="col-sm-3" style="padding-bottom: 20px" style="font-size: 18px"style="padding-bottom: 20px">
                                <div class="single-item" style="height: 300px">
                                    @if ($n->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$n->id)}}"><img src="./resources/image/{{$n->image?$n->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px">{{$n->name}}</span></p>
                                        <p class="single-item-price">
                                            @if ($n->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($n->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($n->unit_price)}} đ</span> <br>
                                            <span class="flash-sale font-bold text-primary">{{number_format($n->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="space10">&nbsp;</div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addtocart',$n->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$n->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @if ($demn == 4 || $demn % 4 == 0 || $demn ==$sonew)
                        </div>
                        <div class="space20">&nbsp;</div>
                        @endif
                        @php
                        $demn ++
                        @endphp
                    @endforeach
                </div> <!-- .beta-products-list -->
                <div class="my-1">
                    {{ $new->appends(['pagehot'=>$hot->currentPage(),'pagesale'=>$sale->currentPage()])->render('../vendor/pagination/paginator') }}
                </div>
                <div class="space10">&nbsp;</div>

                <div class="beta-products-list">
                    <h4>Sản phâm hót</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">{{$sotop}} sản phẩm hót</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        @foreach ($hot as $pr)
                            <div class="col-sm-3" style="padding-bottom: 20px" style="font-size: 18px"style="padding-bottom: 20px">
                                <div class="single-item" style="height: 300px">
                                    @if ($pr->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$pr->id)}}"><img src="./resources/image/{{$pr->image?$pr->image:'stock.png'}}" class="reponsive" height="180" alt="{{$pr->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px">{{$pr->name}}</span></p>
                                        <p class="single-item-price">
                                            @if ($pr->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($pr->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($pr->unit_price)}} đ</span> <br>
                                            <span class="flash-sale font-bold text-primary">{{number_format($pr->promotion_price)}} đ</span>
                                            @endif
                                        </p>
                                        <div class="space10">&nbsp;</div>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addtocart',$pr->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$pr->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="my-1">
                        {{ $hot->appends(['pagesale'=>$sale->currentPage(),'pagenew'=>$new->currentPage()])->render('../vendor/pagination/paginator') }}
                    </div>
                </div> <!-- .beta-products-list -->
        </div> <!-- .main-content -->
    </div> <!-- scontent -->
</div> <!-- .container -->
@endsection
