@extends('layout.master')
@section('title','Trang đăng nhập')
@section('content')
<div style="padding:20px 0px;background-image:url('resources/image/bg1.png')">
   <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="d-table-cell align-middle">
                <div class="text-center mt-4">
                    <h1 class="h2">Chào mừng bạn trở lại</h1>
                    <p class="lead">
                        Hãy đăng nhập ngay thôi nào !!!
                    </p>
                    @if (session('tb'))
                        <div style="color:red;background-color:#FFFFCC;padding:30px;font-size:20px">
                            {{ session('tb') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <img src="resources/image/avatars/avat.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                            </div>
                            <form action="" method="post">
                                @csrf
                                <div style="margin-bottom:15px">
                                    <label class="form-label">Điạ chỉ Email</label>
                                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Nhập email của bạn" />
                                    @if($errors->has('email'))
                                        <div class="text-danger">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                                <div style="margin-bottom:15px">
                                    <label class="form-label">Mật khẩu</label>
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Nhập mật khẩu của bạn" />
                                    @if($errors->has('password'))
                                        <div class="text-danger">{{$errors->first('password')}}</div>
                                    @endif
                                    <small>
                                        <a href="#">Quên mật khẩu?</a>
                                    </small>
                                </div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                        <span class="form-check-label">
                                        Nhớ tài khoản
                                        </span>
                                    </label>
                                </div>
                                <div class="text-center mt-3">
                                    <input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
                                </div>
                            </form>
                            <h5 class="text-center mt-3">or sign up with</h5>
                            <div style="width:max-content;margin:10px auto;font-size:23px">
                                <a href="{{route('githublogin')}}" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-github"></i><span class=" nav-link">Github</span></a>

                                <a href="{{route('googlelogin')}}" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-google"></i><span class="nav-link">Google</span></a>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small nav-link"><a href="{{route('register')}}">Chưa có tài khoản? <span class="text-danger text-fs-4">Đăng ký</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
   </div>
</div>
<div class="space30">&nbsp;</div>
@endsection
