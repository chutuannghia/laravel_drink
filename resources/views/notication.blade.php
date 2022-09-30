@extends('layout.master')
@section('title','Thông báo')
@section('content')
<div class="container">
    <div class="space20">&nbsp;</div>
    <h3 class="text-center" style="color:blueviolet;background-color:beige">Đặt hàng thành công</h3>
    <p class="alert alert-warning" style="line-height: 30px">Chúng tôi sẽ cố gắng đóng hàng, giao hàng đến tay bạn nhanh nhất. Quý khách vui lòng kiểm tra sản phẩm trước khi nhận
        để tránh tình trạng nhiều nơi khác giả danh công ty. Cảm ơn bạn đã tin tưởng chúng tôi!.
    </p>
    <div class="space20">&nbsp;</div>
    <a href="{{route('trangchu')}}" class="btn btn-primary">Quay về trang chủ</a>
</div>
@endsection
