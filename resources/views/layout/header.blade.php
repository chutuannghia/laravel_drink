<div id="header" style="font-size:18px;font-weight:500">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="{{route('trangchu')}}" style="color:#DF3A01"><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                    <li><a href="{{route('trangchu')}}" style="color:#DF3A01"><i class="fa fa-phone"></i> 0968063216</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline" >
                    @if (Auth::check())
                    <li><a href="{{route('trangchu')}}" style="color:green"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
                    <li><a href="{{route('logout')}}" style="color:#DF3A01">Đăng xuất</a></li>
                    @else
                    <li><a href="{{route('login')}}" >Đăng nhập</a></li>
                    <li><a href="{{route('register')}}">Đăng ký</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('trangchu')}}" id="logo"><img src="./resources/image/logo2.png" width="200px" style="border-radius:16px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('search')}}">
                        @csrf
                        <input type="text" value="" name="key" id="key" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart">
                            </i> Giỏ hàng (
                                @if (Session::has('cart'))
                                {{Session('cart')->totalQty}}
                                @else
                                Trống
                                @endif
                                ) <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="beta-dropdown cart-body" style="font-size:16px">
                            @if (Session::has('cart'))
                                @foreach($product_cart as $pc)
                                <div class="cart-item">
                                    <div class="pull-right">
                                        <a href="{{route('removetocart',$pc['item']['id'])}}"><i class="fa fa-times"></i></a>
                                        <a href="{{route('addtocart',$pc['item']['id'])}}"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="./resources/image/{{$pc['item']['image']}}" alt=" hình ảnh sản phẩm"></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">{{$pc['item']['name']}}</span>
                                            <span class="cart-item-amount">{{$pc['qty']}} *
                                                @if ($pc['item']['promotion_price'] == null)
                                                    {{number_format($pc['item']['unit_price'])}}
                                                @else
                                                {{number_format($pc['item']['promotion_price'])}}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{route('order')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                    <li><a href="{{route('loaisanpham')}}">Loại Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($type as $item)
                            <li><a href="{{route('lspid',$item->id)}}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                    <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->

