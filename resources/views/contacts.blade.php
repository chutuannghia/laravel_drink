@extends('layout.master')
@section('title','Liên hệ')
@section('content')
<div class="rev-slider">
    @include('layout.slider')
                <!--slider-->
</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Contacts</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Home</a> / <span>Contacts</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="beta-map">

    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe></div>
</div>
<div class="container">
    <div id="content" class="space-top-none">

        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Biểu mẫu thông tin</h2>
                <div class="space20">&nbsp;</div>
                <p>Xin vui lòng để lại thông tin chúng tôi sẽ liên lạc lại và tư vấn thêm cho quý khách</p>
                <div class="space20">&nbsp;</div>
                <form action="#" method="post" class="contact-form">
                    <div class="form-block">
                        <input name="name" type="text" placeholder="Nhập tên của bạn">
                    </div>
                    <div class="form-block">
                        <input name="email" type="email" placeholder="Địa chỉ email của bạn">
                    </div>
                    <div class="form-block">
                        <input name="title" type="text" placeholder="Tiêu đề yêu cầu">
                    </div>
                    <div class="form-block">
                        <textarea name="content" placeholder="nội dunng yêu cầu"></textarea>
                    </div>
                    <div class="form-block">
                        <input type="submit" class="beta-btn primary" value="Gửi" style="width:150px">
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Thông tin liên lạc</h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title">Địa chỉ</h6>
                <p>
                    số 15 Nguyễn Du, Bình Hòa, Thuận An, Bình Dương
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Công ty nước ngọt TN Drink</h6>
                <p>
                    Mọi chi tiết xin liên hệ <br>
                    <a href="mailto:chutuannghia97@gmail.com">chutuannghia97@gmail.com</a>
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title">Tuyển nhân viên</h6>
                <p>
                    xin liên hệ: <br>
                    <a href="nghia.prosky@gmail.com">Nghĩa</a>
                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
