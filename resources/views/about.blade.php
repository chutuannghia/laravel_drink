@extends('layout.master')
@section('title','Giới thiệu')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left" width="350" height="240">
            <h6 class="inner-title">Giới thiệu</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Home</a> / <span>Giới thiệu</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div style="background-color:white">
    <div class="container">
        <div id="content" style="background-color:white">
            <div class="our-history">
                <h2 class="text-center wow fadeInDown">Lịch Sử công ty</h2>
                <div class="space35">&nbsp;</div>

                <div class="history-slider">
                    <div class="history-navigation" style="display:flex;flex-wrap:nowrap">
                        <a data-slide-index="0" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2013</span></a>
                        <a data-slide-index="1" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2014</span></a>
                        <a data-slide-index="2" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2015</span></a>
                        <a data-slide-index="3" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2017</span></a>
                        <a data-slide-index="4" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2019</span></a>
                        <a data-slide-index="5" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2021</span></a>
                        <a data-slide-index="6" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2022</span></a>
                    </div>

                    <div class="history-slides">
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/hrcoca.jpg" alt="Coca Cola">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title"> Coca Cola </h5>
                                <p>
                                    Cho đến nay, Coca-Cola là thương hiệu nước giải khát có giá trị nhất trên thế giới - hiện trị giá 33,17 tỷ đô la (bằng 180% tổng giá trị của Pepsi và 911% giá trị của Dr Pepper). Coca-Cola được điều chế bởi dược sĩ John Pemberton vào cuối thế kỷ XIX với mục đích ban đầu là trở thành một loại biệt dược.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/hrpepsi.jpg" alt="Pepsi">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title"> Pepsi</h5>
                                <p>
                                    Pepsi là thương hiệu đình đám thuộc Pepsico, một tập đoàn FMCG chuyên về nước giải khát lớn nhất hành tinh.
                                    Là một thương hiệu nước giải khát trị giá 18,37 tỷ USD như hiện nay, ít ai biết rằng Pepsi đã có một khởi đầu cực kỳ khiêm tốn. Thương hiệu này được phát triển bởi Caleb Bradham vào năm 1893, được gọi là Brad’s Drink, và được sản xuất và bán tại cửa hàng thuốc riêng của Bradham
                                </p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/history3.jpg" alt="Redbull ">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Redbull </h5>
                                <p>
                                    Redbull, hay còn được người Việt Nam chúng ta gọi với cái tên thân thương - Bò húc. Đây là thương hiệu nước tăng lực nổi tiếng số một thế giới với 7,5 tỷ lon được bán ra chỉ trong năm 2019, nhìn con số như vậy cũng đủ hiểu độ phổ biến của nhãn hiệu này khủng khiếp đến mức nào.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/history4.jpg" alt="Mountain Dew">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Mountain Dew</h5>
                                <p>
                                    Mountain Dew - một nhãn hiệu của Pepsico - được xuất hiện lần đầu tiên vào năm 1940, nhưng kể từ đó, công thức của loại nước này đã có nhiều phần thay đổi.
                                    Hiện nay, loại nước uống giải khát mùa hè này được biết đến nhờ màu sắc xanh đẹp xuất sắc và mùi gas xộc lên mũi cực thú vị. Khi uống, Mountain Dew giúp bạn giải nhiệt rất tốt. Chính vì vậy, đây được cho là một trong những loại nước uống giải khát được các bạn trẻ ưa chuộng nhất.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/history5.jpg" alt="Sprite ">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Sprite </h5>
                                <p>
                                    Bên cạnh những thương hiệu nước uống giải khát khác, Sprite cũng là một nhãn hiệu có tiếng tăm và được nhiều người tin dùng trong thị trường Việt Nam.
                                    Không chỉ là loại nước uống ngon, rẻ, giúp bạn xua tan cơn khát, Sprite của thương hiệu Coca Cola còn giúp kích thích vị giác, giúp chúng ta cảm nhận rõ hơn hương vị của món ăn. Không những thế, nếu uống Sprite có điều độ, chúng còn giúp bạn tiêu hóa tốt hơn khi bị đầy hơi, món ăn cũng từ đó mà trở nên ngon miệng hơn.
                                </p>
                           </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/history6.jpg" alt="Monster Energy">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Monster Energy</h5>
                                <p>
                                    Ngoài Redbull - thương hiệu nước tăng lực nổi tiếng bậc nhất thế giới, Monster Energy cũng là một trong những nhãn hiệu nước vô cùng đình đám của Mỹ.
                                    Khi nhắc đến Monster Energy, ta sẽ nghĩ ngay đến những thiết kế 3 vết cào đại diện cho hình ảnh “quái vật” như tên vô cùng độc đáo và ấn tượng của thương hiệu nước uống này. Thế nhưng bên cạnh đó, để có được vị thế như ngày hôm nay, Monster Energy phải có những điểm đặc trưng nhất định trong hương vị.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                            <div class="col-sm-5">
                                <img src="./resources/image/history7.jpg" alt="Fanta">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Fanta</h5>
                                <p>
                                    Fanta là thương hiệu đồ uống có gas hương trái cây khá được ưa chuộng tại Việt Nam được sản xuất bởi công ty Coca Cola.
                                    Nước giải khát có gas hương cam Fanta là thức uống giải khát giúp bổ sung vitamin và khoáng chất tốt cho cơ thể. Loại nước uống này khá phù hợp với những người không quá thích nước có ga nhưng vẫn muốn trải nghiệm cảm giác sảng khoái, bởi lượng ga trong Fanta ít hơn so với những nhãn hiệu còn lại.
                                    Mỗi khi hè đến, bạn chỉ cần chuẩn bị một chai Fanta được ướp lạnh trong tủ mát, chỉ cần nghĩ đến cảm giác đã khát ấy thôi đã cảm thấy vô cùng sung sướng rồi.
                                </p>
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space20">&nbsp;</div>
            <hr />
            <div class="space20">&nbsp;</div>
            <h2 class="text-center wow fadeInDown">Niềm đam mê của chúng tôi đối với những gì chúng tôi làm truyền sang dịch vụ của chúng tôi</h2>
            <div class="space20">&nbsp;</div>
            <p class="text-center wow fadeInLeft">Chúng tôi vân luôn cố gắng hết sức để có thể mang đến cho khách hàng nhưng sản phẩm chất lượng nhất với giá cả tốt nhất. </p>
            <div class="space35">&nbsp;</div>

            <div class="row">
                <div class="col-sm-2 col-sm-push-2">
                    <div class="beta-counter">
                        <p class="beta-counter-icon"><i class="fa fa-user"></i></p>
                        <p class="beta-counter-value timer numbers" data-to="19855" data-speed="2000">195</p>
                        <p class="beta-counter-title">Nhân viên</p>
                    </div>
                </div>

                <div class="col-sm-2 col-sm-push-2">
                    <div class="beta-counter">
                        <p class="beta-counter-icon"><i class="fa fa-picture-o"></i></p>
                        <p class="beta-counter-value timer numbers" data-to="3568" data-speed="2000">3568</p>
                        <p class="beta-counter-title">Sản phẩm</p>
                    </div>
                </div>

                <div class="col-sm-2 col-sm-push-2">
                    <div class="beta-counter">
                        <p class="beta-counter-icon"><i class="fa fa-clock-o"></i></p>
                        <p class="beta-counter-value timer numbers" data-to="258934" data-speed="2000">258934</p>
                        <p class="beta-counter-title">Thời gian</p>
                    </div>
                </div>

                <div class="col-sm-2 col-sm-push-2">
                    <div class="beta-counter">
                        <p class="beta-counter-icon"><i class="fa fa-pencil"></i></p>
                        <p class="beta-counter-value timer numbers" data-to="150" data-speed="2000">150</p>
                        <p class="beta-counter-title">Sản phẩm mới</p>
                    </div>
                </div>
            </div> <!-- .beta-counter block end -->

            <div class="space50">&nbsp;</div>
            <hr />
            <div class="space50">&nbsp;</div>

            <h2 class="text-center wow fadeInDownwow fadeInDown">Nhón làm việc hiệu quả nhất</h2>
            <div class="space20">&nbsp;</div>
            <h5 class="text-center other-title wow fadeInLeft">Nhóm sale TP.HCM</h5>
            <p class="text-center wow fadeInRight"> Với sự cố gắng cũng như các ý tưởng sáng tạo <br />Họ đã tạo nên năng xuất vượt trội</p>
            <div class="space20">&nbsp;</div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <div class="beta-person media">

                        <img class="pull-left" width="350" height="240" src="./resources/image/persion1.jpg" alt="persion1">

                        <div class="media-body beta-person-body" style="height: 350px">
                            <h5>Monkey D. Luffyn</h5>
                            <p class="font-large h5">Người sáng lập</p>
                            <p>Monkey D. Luffy "Mũ Rơm"[n 1][2] (モンキー・D・ルフィ Monkī Dī Rufi?) là một nhân vật hư cấu và là nhân vật chính.</p>
                            <a href="{{route('gioithieu')}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <div class="beta-person media ">

                        <img class="pull-left" width="350" height="240" src="./resources/image/persion2.jpg" alt="Roronoa Zoro">

                        <div class="media-body beta-person-body" style="height: 350px">
                            <h5>Roronoa Zoro</h5>
                            <p class="font-large h5">Thành viên chủ lực</p>
                            <p>Roronoa Zoro[7] (ロロノア・ゾロ? Roronoa Zoro), biệt danh "Thợ săn hải tặc" Zoro[8] (海賊狩りのゾロ Kaizoku-Gari no Zoro?)

                            </p>
                            <a href="{{route('gioithieu')}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space60">&nbsp;</div>
            <h5 class="text-center other-title wow fadeInDown">Các thành còn lại</h5>
            <p class="text-center wow fadeInUp">Những người đã luôn sát canh chung sức xây dựng<br />Phấn đấu đến cuối cùng vì mục tiêu chung</p>
            <div class="space20">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="beta-person beta-person-full">
                <div class="bets-img-hover">
                        <img  width="250" height="200" src="./resources/image/nami.jpg" alt="nami">
                </div>
                        <div class="beta-person-body" style="height: 350px">
                            <h5>Nami</h5>
                            <p class="font-large">Thành viên</p>
                            <p>Nami xuất hiện lần đầu trong chương truyện "Nami" (ナミ登場 Nami Tōjō?), lần đầu được phát hành trên tạp chí Weekly Shōnen Jump của Nhật Bản vào ngày 22 tháng 9 năm 1997.[1] Ngay từ khi xuất hiện, cô được khắc họa là một cô gái xinh đẹp, tính tình khôn khéo, xảo quyệt, tàn nhẫn và là một tên trộm chính hiệu. .</p>
                            <a href="{{route('gioithieu')}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img  width="250" height="200" src="./resources/image/sanj.jpg" alt="sanj">
                    </div>
                        <div class="beta-person-body" style="height: 350px">
                            <h5>Vinsmoke Sanji</h5>
                            <p class="font-large">Thành viên</p>
                            <p>Vinsmoke Sanji
                            SỬA ĐỔI
                            Sanji full body.png
                            Sanji là người cực kì lịch lãm và vô cùng ga lăng đối với phái nữ. Anh đã được dạy là không bao giờ làm đau hoặc nói lời xúc phạm đến bất cứ cô gái nào kể cả nếu điều đó gây nguy hiểm cho tính mạng của anh.</p>
                            <a href="{{route('gioithieu')}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img  width="250" height="200" src="./resources/image/Usopp.jpg" alt="Usopp">
                    </div>
                        <div class="beta-person-body" style="height: 350px">
                            <h5>God" Usopp</h5>
                            <p class="font-large">Thành viên</p>
                            <p>"God" Usopp is the sniper of the Straw Hat Pirates and one of the Nine Senior Officers of the Straw Hat Grand Fleet.[2] He is the fourth member of the crew and the third to join, doing so at the end of the Syrup Village Arc. Although he left the crew during the Water 7 Arc, he rejoined at the end of the Post-Enies.[17]</p>
                            <a href="{{route('gioithieu')}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img  width="250" height="200" src="./resources/image/Chopper.jpg" alt="Chopper">
                    </div>
                        <div class="beta-person-body" style="height: 350px">
                            <h5>Tony Tony Chopper</h5>
                            <p class="font-large">Thành viên</p>
                            <p>Tony Tony Chopper, also known as "Cotton Candy Lover" Chopper,[7] is the doctor of the Straw Hat Pirates and one of the Nine Senior Officers of the Straw Hat Grand Fleet.[2] He is the sixth member of the crew and the fifth to join.</p>
                            <a href="{{route('gioithieu')}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- #content -->
    </div>
</div> <!-- .container -->
@endsection
