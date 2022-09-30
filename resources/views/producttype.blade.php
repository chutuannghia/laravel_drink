@extends('layout.master')
@section('title','Loại sản phẩm')
@section('content')
<div class="rev-slider">
    @include('layout.slider')
                <!--slider-->
</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Loại Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Home</a> / <span>Loại Sản phẩm</span>
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
                        <li><a href="{{route('lspid',$pr1->id)}}">{{$pr1->name}}</a></li>
                        @endforeach
                        <li>{{ $type1->appends(['pagehot'=>$hot->currentPage(),'pagenew'=>$new->currentPage()])->render('../vendor/pagination/paginator') }}</li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{$sonew}} Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        @php
                            $demn = 1;
                        @endphp
                        @foreach ($new as $n)
                            @if ($demn == 1 || $demn % 3 == 0)
                                <div class="row">
                            @endif
                                <div class="col-md-4" style="padding-bottom: 20px font-size: 18px">
                                    <div class="single-item" style="height: 300px">
                                        @if ($n->promotion_price == !null)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="{{route('sanpham',$n->id)}}"><img src="./resources/image/{{isset($n->image)?$n->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$n->name}}"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px" >{{$n->name}}</span></p>
                                            <p class="single-item-price" style="height:40px;margin:auto 0px">
                                                @if ($n->promotion_price == null)
                                                <span class="font-bold text-primary">{{number_format($n->unit_price)}}</span> đ
                                                @else
                                                <span class="flash-del">{{number_format($n->unit_price)}} đ</span> <br>
                                                <span class="flash-sale">{{number_format($n->promotion_price)}} đ</span>
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
                            @if ($demn == 3 || $demn % 3 == 0|| $demn == $sonew)
                            </div>
                            <div class="space20">&nbsp;</div>
                            @endif
                            @php
                               $demn ++
                            @endphp
                        @endforeach
                    </div> <!-- .beta-products-list -->
                    <div class="my-1">
                        {{ $new->appends(['pagehot'=>$hot->currentPage(),'pagetype'=>$type1->currentPage()])->render('../vendor/pagination/paginator') }}
                    </div>
                    <div class="space20">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>sản phẩm hót</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{$sotop}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <?php $dem = 1; ?>
                            @foreach ($hot as $h)
                                @if ($dem == 1 || $dem % 3 == 0)
                                <div class="row">
                                @endif
                                    <div class="col-md-4" style="padding-bottom: 20px font-size: 18px"style="padding-bottom: 20px">
                                        <div class="single-item" style="height: 300px">
                                            @if ($h->promotion_price == !null)
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="{{route('sanpham',$h->id)}}"><img src="./resources/image/{{isset($h->image)?$h->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$h->name}}"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px" style="font-size:20px;font-weight:bold;color:#FE9A2E">{{$h->name}}</span></p>
                                                <p class="single-item-price" style="height:40px;margin:auto 0px">
                                                    @if ($h->promotion_price == null)
                                                    <span class="font-bold text-primary">{{number_format($h->unit_price)}}</span> đ
                                                    @else
                                                    <span class="flash-del">{{number_format($h->unit_price)}} đ</span> <br>
                                                    <span class="flash-sale">{{number_format($h->promotion_price)}} đ</span>
                                                    @endif

                                                </p>
                                            </div>
                                            <div class="space10">&nbsp;</div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('addtocart',$h->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('sanpham',$h->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @if ($dem == 3 || $dem % 3 == 0 || $dem == $sotop )
                                </div>
                                <div class="space20">&nbsp;</div>
                                @endif
                                @php
                                $dem ++
                                @endphp
                            @endforeach
                        </div>
                        <div>
                            {{ $hot->appends(['pagetype'=>$type1->currentPage(),'pagenew'=>$new->currentPage()])->render('../vendor/pagination/paginator') }}
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
