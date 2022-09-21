@extends('layout.master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($new as $n)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$n->id)}}"><img src="./resources/image/{{$n->image}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:{{route('sanpham',$n->id)}}FE9A2E">{{$n->name}}</span></p>
                                        <p class="single-item-price">
                                            <span class="font-bold text-primary">{{number_format($n->unit_price)}}</span> đ
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
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phâm hót</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($product as $pr)
                                @if ($pr->promotion_price == null)
                                <div class="col-sm-3" style="padding-bottom: 20px">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{route('sanpham',$pr->id)}}"><img src="./resources/image/{{$pr->image}}" class="image-fluid" height="180" alt="{{$pr->name}}"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:{{route('sanpham',$n->id)}}FE9A2E">{{$pr->name}}</span></p>
                                            <p class="single-item-price">
                                                <span class="font-bold text-primary">{{number_format($pr->unit_price)}}</span> đ
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('sanpham',$pr->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-sm-3" style="padding-bottom: 20px">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="{{route('sanpham',$pr->id)}}"><img src="./resources/image/{{$pr->image}}" class="image-fluid" height="180" alt="{{$pr->name}}"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><span style="font-size:20px;font-weight:bold;color:{{route('sanpham',$n->id)}}FE9A2E">{{$pr->name}}</span></p>
											<p class="single-item-price">
												<span class="flash-del">{{number_format($pr->unit_price)}} đ</span>
												<span class="flash-sale">{{number_format($pr->promotion_price)}} đ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('sanpham',$pr->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                @endif
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- {{route('sanpham',$n->id)}}content -->
</div> <!-- .container -->
@endsection
