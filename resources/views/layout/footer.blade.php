<div style="width: 100%">
    <!-- Grid container -->
      <!-- Section: Images -->
      <section class="text-center">
        <div class="row" style="padding-right:0px">
            @foreach ($footer as $ft)
            <div class="col-lg-2 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <a href="{{route('sanpham',$ft->id)}}">
                        <img src="resources/image/{{$ft->image}}" style="width:100%;height:150px;border-radius:10px"/>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
      <!-- Section: Images -->
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="space20">&nbsp;</div>
        <div class="text-center alert alert-dark" style="font-size: 30px">
        © 2022 Copyright:
        <a class="text-white" href="mailto:tndrink@gmail.com">TN Drink</a>
        </div>
        <!-- Copyright -->
</div>
