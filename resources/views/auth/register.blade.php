@extends('layout.master')
@section('title','Trang đăng ký')
@section('content')
<div  style="padding:20px 0px;background-image:url('resources/image/bg1.png')">
    <div class="container">
        <div class="row w-100 mx-0">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mb-3" style="width: 100%">
                    <div class="row g-0" style="padding:20px 0px">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card-body bg-secondary bg-opacity-50">
                                <h1 class=" card-title text-center"><span style="font-size: 50px;color:red">Đ</span>ăng <span
                                        style="font-size: 50px;color:blueviolet">K</span>ý</h1>
                                        @if (session('tb'))
                                            <div style="color:red;font-size:18px;padding:20px">
                                                {{ session('tb') }}
                                            </div>
                                        @endif
                                <form class="forms-sample" action="" method="post">
                                    @csrf
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                                        @if($errors->has('name'))
                                            <div class="text-danger">{{$errors->first('name')}}</div>
                                        @endif
                                    </div>
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Địa chỉ Email</label>
                                        <input type="email" class="form-control" placeholder="Địa chỉ Email" name="email">
                                        @if($errors->has('email'))
                                            <div class="text-danger">{{$errors->first('email')}}</div>
                                        @endif
                                    </div>
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" placeholder="số điện thoại" name="phone">
                                        @if($errors->has('phone'))
                                            <div class="text-danger">{{$errors->first('phone')}}</div>
                                        @endif
                                    </div>
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" placeholder="Địa chỉ" name="address">
                                        @if($errors->has('address'))
                                            <div class="text-danger">{{$errors->first('address')}}</div>
                                        @endif
                                    </div>
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Nhập mật khẩu">
                                            @if($errors->has('password'))
                                                <div class="text-danger">{{$errors->first('password')}}</div>
                                            @endif
                                    </div>
                                    <div style="margin-bottom:20px">
                                        <label class="form-label">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" name="repassword"
                                            placeholder="Xác nhận mật khẩu">
                                            @if($errors->has('repassword'))
                                                <div class="text-danger">{{$errors->first('repassword')}}</div>
                                            @endif
                                    </div>
                                    <div class="text-center" style="margin-bottom:10px">
                                        <input type="submit" value="Đăng ký" class="btn btn-primary me-2 mb-2 mb-md-0">
                                    </div>
                                    <div class="space20">&nbsp;</div>
                                    <a href="{{route('login')}}" class="d-block mt-3 text-muted fs-5 nav-link">Đã có tài khoản?
                                        <span class="text-danger">Đăng nhập</span></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2"></div
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection
