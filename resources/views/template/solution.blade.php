@extends('layouts.main')
@section('content')
<div class="banner">
    <img src={{asset("storage/thum/uu-dai.png")}} alt="">
</div>
<div class="container page_details_featured">
    <div class="headbox">
        <h2 class="title"><span>Chi tiết tính năng</span> <br>Ưu đãi</h2>
        <p>CNV Loyalty đã đồng hành cùng hơn 500+ doanh nghiệp xây dựng App riêng mang tên thương hiệu, tạo nhóm
            khách hàng trung thành, giúp tăng doanh thu và hỗ trợ quá trình chăm sóc khách hàng </p>
    </div>
</div>
<section class="feature">
    <div class="container">
        <div class="row grid-feature">
            <div class="col-md-6 order2">
                <div class="hv-scale"><img src={{asset("/storage/images/uu-dai-1.png")}} caption="false" width="570"
                        height="503"></div>
            </div>
            <div class="col-md-6 order1">
                <div class="i-title">Quản lý danh sách ưu đãi</div>
                <div class="desc">
                    <p>Khách hàng có thể quản lý mọi ưu đãi của mình một cách dễ dàng. Khi nhìn vào danh sách ưu
                        đãi, khách hàng sẽ biết mình đang có bao nhiêu ưu đãi đã dùng, ưu đãi chưa dùng và cả
                        hạn sử dụng của những ưu đãi đó.</p>
                </div>
            </div>
            <div></div>
        </div>
        <div class="row grid-feature">
            <div class="col-md-6 order1">
                <div class="i-title">Quản lý ưu đãi theo thương hiệu</div>
                <div class="desc">
                    <p>Mỗi thương hiệu sẽ có nhiều ưu đãi khác nhau. Khi tổng hợp lại nhiều thương hiệu thì sẽ
                        có càng nhiều ưu đãi. Chính vì vậy, tính năng này giúp khách hàng quản lý ưu đãi của
                        mình theo từng thương hiệu để dễ dàng hơn trong việc sử dụng.</p>
                </div>
            </div>
            <div class="col-md-6 order2">
                <div class="hv-scale"><img src={{asset("storage/images/uu-dai-2.png")}} caption="false" width="570"
                        height="503"></div>
            </div>
        </div>
        <div class="row grid-feature">
            <div class="col-md-6 order2">
                <div class="hv-scale"><img src={{asset("storage/images/uu-dai-3.png")}} caption="false" width="570"
                        height="503"></div>
            </div>
            <div class="col-md-6 order1">
                <div class="i-title">Hiển thị lịch sử sử dụng</div>
                <div class="desc">
                    <p>Tính năng này cho phép khách hàng nắm được lịch sử sử dụng ưu đãi của mình khi cần thiết.
                        Đồng thời, nó sẽ giúp khách hàng không bỏ sót ưu đãi nào. Ngoài ra, khi có bất kì sự cố
                        nào về việc sử dụng ưu đãi thì chỉ cần vào lịch sử sử dụng, vấn đề của khách hàng sẽ
                        được giải quyết dễ dàng hơn.</p>
                </div>
            </div>
        </div>
        <div class="row grid-feature">
            <div class="col-md-6 order1">
                <div class="i-title">Nhận ưu đãi dành riêng</div>
                <div class="desc">
                    <p>Một số ưu đãi chỉ dành riêng cho một số nhóm khách hàng nhất định. Hoặc trong dịp đặc
                        biệt (sinh nhật),…thì thành viên sẽ nhận được ưu đãi riêng. Những ưu đãi này khách hàng
                        vẫn sử dụng bình thường như những ưu đãi khác, chỉ khác một điều đó là không phải ai
                        cũng nhận được.</p>
                </div>
            </div>
            <div class="col-md-6 order2">
                <div class="hv-scale"><img src={{asset("storage/images/uu-dai-4.png")}} caption="false" width="570"
                        height="503"></div>
            </div>
        </div>
    </div>
</section>
<section class="banner-feature">
    <div class="container">
        <div class="head-title">
            Các tính năng khác
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">

                        <img class="lazy" data-src={{asset("storage/1.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="tich-diem-thanh-vien.html">

                        <img class="lazy" data-src={{asset("storage/2.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="uu-dai.html">

                        <img class="lazy" data-src={{asset("storage/3.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="danh-gia.html">

                        <img class="lazy" data-src={{asset("storage/anh-gia.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="bao-cao.html">

                        <img class="lazy" data-src={{asset("storage/bao-cao.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="booking.html">

                        <img class="lazy" data-src={{asset("storage/booking.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="khach-hang.html">

                        <img class="lazy" data-src={{asset("storage/khach-hang.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="marketing.html">

                        <img class="lazy" data-src={{asset("storage/marketing.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="noi-dung.html">

                        <img class="lazy" data-src={{asset("storage/noi-dung.png")}} title="" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="doi-thuong.html">

                        <img class="lazy" data-src={{asset("storage/oi-thuong.png")}} title="" alt="">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="page_kham_khao_tinh_nang">
    <div class="container">
        <div class="headbox">
            <h2 class="title">Tham khảo tính năng theo ngành hàng của bạn</h2>
            <p>CNV Loyalty đã đồng hành cùng hơn 200 doanh nghiệp xây dựng App riêng mang tên thương hiệu, tạo
                nhóm khách hàng trung thành, giúp tăng doanh thu và hỗ trợ quá trình chăm sóc khách hàng </p>
        </div>
        <div class="row group_content_tinh_nang_theo_nghanh">
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-fb.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">App Ngành F &amp; B</a></h3>
                        <span>App chăm sóc khách hàng không chỉ là xu hướng tất yếu mà còn là công cụ hữu hiệu
                            hỗ trợ các hoạt động kinh doanh của doanh nghiệp F&amp;B</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-fitness.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">App Ngành Fitness</a></h3>
                        <span>Ứng dụng loyalty app trên điện thoại khuyến khích người dùng luyện tập và tích lũy
                            điểm nhận những phần thưởng hấp dẫn từ thương hiệu.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-auto.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">App Ngành Auto</a></h3>
                        <span>Ứng dụng loyalty app trên điện thoại khuyến khích người dùng luyện tập và tích lũy
                            điểm nhận những phần thưởng hấp dẫn từ thương hiệu.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-spa.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">App Ngành Spa</a></h3>
                        <span>App ngành Spa, chăm sóc khách hàng thân thiết, thay thế thẻ member cứng, chật ví
                            giúp tích điểm, thăng hạng dễ dàng. Nhận nhiều ưu đãi, đổi thưởng qua App</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-ban-le.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">App Ngành Retail</a></h3>
                        <span>Ưu điểm của app bán lẻ giúp doanh nghiệp gia tăng trải nghiệm khách hàng, đặt hàng
                            trực tuyến qua app mobile, tích điểm, đổi quà...</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="icon_tinh_nang">
                        <img class="lazy" data-src={{asset("storage/nghanh-hang/nghanh-ban-le.png")}} alt="">
                    </div>
                    <div class="group_description_tinh_nang">
                        <h3 class="title smooth"><a href="javascript:void(0)">Ngành Hospitality</a></h3>
                        <span>Đăng bán sản phẩm và dịch vụ thoải mái, thiết lập cực nhiều nội dung có ích cho
                            khách hàng.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partner" id="khach-hang" data-animate-in="fadeIn">
    <div class="container">
        <div class="headbox">

            <h2 class="title">Hơn 500+ doanh nghiệp đã sở hữu Loyalty App</h2>
            <p><span style="font-family: arial, helvetica, sans-serif;">Để xây dựng chương trình khách hàng
                    trung thành, hiệu quả, tiết kiệm</span></p>
        </div>
        <div class="customers_partner customers_partner_desktop">
            <div class="li">
                <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="storage/avatars/group-3319.jpg"></a>

            </div>
            <div class="li">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/group-3315.jpg"></a>

            </div>
            <div class="li">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/di-dong-viet.jpg"></a>

            </div>
            <div class="li">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/group-3308.jpg"></a>

            </div>
            <div class="li">
                <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                        data-src="/storage/avatars/group-3311.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3310.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3312.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3314.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/mask-group.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3323.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3325.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src={{asset("storage/avatars/group-3322.jpg")}}></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3316.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3309.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3324.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3321.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3317.jpg"></a>

            </div>
            <div class="li">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3320.jpg"></a>

            </div>
        </div>

        <div class="customers_partner customers_partner_mobile">
            <div class="item">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/group-3319.jpg"></a>
            </div>
            <div class="item">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/group-3315.jpg"></a>
            </div>
            <div class="item">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/di-dong-viet.jpg"></a>
            </div>
            <div class="item">
                <a href="../blogs/case-study-dien-hinh.html"><img class="lazy"
                        data-src="/storage/avatars/group-3308.jpg"></a>
            </div>
            <div class="item">
                <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                        data-src="/storage/avatars/group-3311.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3310.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3312.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3314.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/mask-group.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3323.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3325.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3322.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3316.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3309.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3324.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3321.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3317.jpg"></a>
            </div>
            <div class="item">
                <a href=""><img class="lazy" data-src="/storage/avatars/group-3320.jpg"></a>
            </div>
        </div>
    </div>
</section>
<section class="banner-ads" style="background-image: url(../storage/images/347.jpg)">
    <div class="container">

        <div class="headbox">
            <h2 class="title"><strong class="gia_tang">Gia tăng tệp khách hàng trung thành</strong> của bạn với
                nền tảng chăm sóc khách hàng của CNV Loyalty</h2>
        </div>
        <div class="items">
            <ul>
                <li><a href="#"> <img src="../themes/default/assets/images/ios.png" alt="ios.png"
                            title="ios.png"> </a></li>
                <li><a href="#"> <img src="../themes/default/assets/images/android.png" alt="android.png"
                            title="android.png"> </a></li>
            </ul>
        </div>

        <div class="group_btn group_btn_banner">
            <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                href="#information-form"><img src="../themes/default/images/template_new/Calling.png"
                    alt="">Đăng ký tư vấn</a>
            <a class="event_btn event_btn_two btn_hover" data-toggle="modal" data-target="#informationForm"
                href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a>
        </div>

    </div>
</section>
@endsection