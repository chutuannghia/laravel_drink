@extends('layout.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($type1 as $pr1)
                        <li><a href="{{route('loaisanpham',$pr1->id)}}">{{$pr1->name}}</a></li>
                        @endforeach
                        <li>{{ $type1->render('../vendor/pagination/paginator') }}</li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{$sonew}} Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($new as $n)
                                <div class="col-md-4" style="padding-bottom: 20px">
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
                                                <span class="flash-sale">{{number_format($n->promotion_price)}} đ</span>
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
                    <div class="space20">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>sản phẩm hót</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{$sotop   }} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($hot as $h)
                                <div class="col-md-4" style="padding-bottom: 20px">
                                    <div class="single-item">
                                        @if ($h->promotion_price == !null)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="{{route('sanpham',$h->id)}}"><img src="./resources/image/{{$h->image}}" class="image-fluid" height="180" alt="{{$h->name}}"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$h->name}}</span></p>
                                            <p class="single-item-price">
                                                @if ($h->promotion_price == null)
                                                <span class="font-bold text-primary">{{number_format($h->unit_price)}}</span> đ
                                                @else
                                                <span class="flash-del">{{number_format($h->unit_price)}} đ</span>
                                                <span class="flash-sale">{{number_format($h->promotion_price)}} đ</span>
                                                @endif

                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('sanpham',$h->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="my-2">
                            {{ $hot->render('../vendor/pagination/paginator') }}
                        </div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->

        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection
