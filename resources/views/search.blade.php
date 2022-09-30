@extends('layout.master')
@section('title','search')
@section('content')
<div class="rev-slider">
    @include('layout.slider')
                <!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space20">&nbsp;</div>
                <!-- sanphamsale -->
                <div class="beta-products-list">
                    <h4>Sản phẩm</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">Tìm thấy: {{count($product)}} sản phẩm</p>
                        <div class="clearfix"></div>
                    </div>

                    <div class="row">
                        @foreach ($product as $p)
                            <div class="col-sm-3" style="padding-bottom: 20px" style="font-size: 18px">
                                <div class="single-item" style="height: 300px">
                                    @if ($p->promotion_price == !null)
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$p->id)}}"><img src="./resources/image/{{$p->image?$p->image:'stock.png'}}" class="image-fluid" height="180" alt="{{$p->name}}"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title"><span style="font-size:16px;font-weight:bold;color:#FE9A2E;height:40px;padding:auto 0px">{{$p->name}}</span></p>
                                        <p class="single-item-price" style="height: 60px;margin:auto 0px">
                                            @if ($p->promotion_price == null)
                                            <span class="font-bold text-primary">{{number_format($p->unit_price)}}</span> đ
                                            @else
                                            <span class="flash-del">{{number_format($p->unit_price)}} đ</span>
                                            <br>
                                            <span class="flash-sale font-bold text-primary">{{number_format($p->promotion_price)}} đ</span>
                                            @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addtocart',$p->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham',$p->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> <!-- .beta-products-list -->
                <div class="space10">&nbsp;</div>
        </div> <!-- .main-content -->
    </div> <!-- scontent -->
</div> <!-- .container -->
@endsection
