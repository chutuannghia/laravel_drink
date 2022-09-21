@extends('layout.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
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
                        @foreach ($product1 as $pr1)
                        <li><a href="{{route('sanpham',$pr1->id)}}">{{$pr1->name}}</a></li>
                        @endforeach
                        <li>{{ $product1->render('../vendor/pagination/paginator') }}</li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">22 Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($new as $n)
                            @if ($n->promotion_price == null)
                            <div class="col-sm-3" style="padding-bottom: 20px">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="#"><img src="./resources/image/{{$n->image}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$n->name}}</span></p>
                                        <p class="single-item-price">
                                            <span class="font-bold text-primary">{{number_format($n->unit_price)}}</span> đ
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="#">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-sm-3" style="padding-bottom: 20px">
                                <div class="single-item">
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                    <div class="single-item-header">
                                        <a href="#"><img src="./resources/image/{{$n->image}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$n->name}}</span></p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($n->unit_price)}} đ</span>
                                            <span class="flash-sale">{{number_format($n->promotion_price)}} đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>sản phẩm hót</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">49 sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($product as $pr)
                            @if ($pr->promotion_price == null)
                            <div class="col-sm-3" style="padding-bottom: 20px">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="#"><img src="./resources/image/{{$pr->image}}" class="image-fluid" height="180" alt="{{$pr->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$pr->name}}</span></p>
                                        <p class="single-item-price">
                                            <span class="font-bold text-primary">{{number_format($pr->unit_price)}}</span> đ
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="#">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-sm-3" style="padding-bottom: 20px">
                                <div class="single-item">
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                    <div class="single-item-header">
                                        <a href="#"><img src="./resources/image/{{$pr->image}}" class="image-fluid" height="180" alt="{{$pr->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$pr->name}}</span></p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($pr->unit_price)}} đ</span>
                                            <span class="flash-sale">{{number_format($pr->promotion_price)}} đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                        </div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->

        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection
