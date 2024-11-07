@extends('layouts.main')

@section('content')
<section class="event_banner_area">
    <div class="parallax-effect"></div>
    <div class="container">
        <div class="row banner_main">
            <div class="container">
                <div class="slider_header">
                    <!-- Banner 1: Định Hướng Thương Hiệu Tech -->
                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Xây dựng Thương Hiệu chuyên nghiệp cùng Wind Lập Trình</h6>
                                <h2 class="">Thúc đẩy định vị thương hiệu của bạn trong lĩnh vực công nghệ, tối ưu hóa trải nghiệm người dùng với các ứng dụng và giải pháp web hiện đại, giúp thương hiệu của bạn nổi bật trên thị trường.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                    href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                        alt="Đăng ký tư vấn">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/brand-tech.png') }}"
                                    alt="Banner xây dựng thương hiệu công nghệ">
                            </div>
                        </div>
                    </div>

                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Giải pháp Đa Nền Tảng Thương Mại Điện Tử từ Wind Lập Trình</h6>
                                <h2 class="">Tiếp cận khách hàng trên mọi kênh với dịch vụ thiết kế website, mini app, TikTok Shop và Shopee từ Wind Lập Trình. Tối ưu hóa trải nghiệm mua sắm đa nền tảng, gia tăng hiệu quả bán hàng và xây dựng thương hiệu mạnh mẽ trên các kênh trực tuyến.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                   href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                   alt="Đăng ký tư vấn">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/ecommerce-platforms.png') }}"
                                     alt="Banner giải pháp thương mại điện tử đa nền tảng">
                            </div>
                        </div>
                    </div>
                    

                    <!-- Banner 3: Mini App trên Zalo -->
                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Khởi tạo <span>Mini App trên Zalo</span> cho thương hiệu của bạn</h6>
                                <h2 class="">Tăng cường chăm sóc khách hàng trên nền tảng Zalo, hỗ trợ mua sắm và booking dễ dàng. Mở rộng tệp khách hàng trung thành với giải pháp Affiliate Marketing tiên tiến.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                    href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                        alt="Đăng ký tư vấn Mini App trên Zalo">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/zalo-mini-app.png') }}"
                                    alt="Banner Mini App Zalo từ Wind Lập Trình">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



    <section class="four_post_bottom_banner">
        <div class="container">
            <div class="row">
                <!-- Thiết kế Website -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/website.png') }}" alt="Thiết kế Website Wind Lập Trình"
                                title="Thiết kế Website">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Thiết kế Website">Thiết kế
                                    Website</a></h3>
                            <p>Thiết kế website chuyên nghiệp, tối ưu hóa SEO và giao diện thân thiện, tích hợp tính năng
                                như tích điểm, ưu đãi, và thông báo tự động để tăng tương tác với khách hàng.</p>
                            <a target="_self" class="smooth more" href="#nganh-hang"
                                title="Xem thêm về thiết kế website">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Mini App -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/mini-app.png') }}" alt="Mini App Wind Lập Trình"
                                title="Mini App">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Mini App">Mini App</a></h3>
                            <p>Tạo Mini App thương hiệu riêng trên Zalo, giúp doanh nghiệp kết nối khách hàng dễ dàng. Nâng
                                cao trải nghiệm người dùng ngay trên nền tảng Zalo hiệu quả và tiện lợi.</p>
                            <a target="_self" class="smooth more"
                                href="https://www.taominiapp.com/?utm_source=website_cnvloyalty&utm_medium=widget_trangchu&utm_campaign=zalominiapp"
                                title="Xem thêm về Mini App">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Thiết kế Software -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/sofware.png') }}" alt="Thiết kế Software Wind Lập Trình"
                                title="Thiết kế Software">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Thiết kế Software">Thiết kế
                                    Software</a></h3>
                            <p>Xây dựng phần mềm quản lý dữ liệu khách hàng thông minh, hỗ trợ doanh nghiệp hiểu rõ hành vi
                                khách hàng và đưa ra chiến lược phát triển dựa trên dữ liệu thực tế.</p>
                            <a target="_self" class="smooth more" href="javascript:void(0)"
                                title="Xem thêm về thiết kế Software">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Brand Tech -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/brand.png') }}" alt="Brand Tech Wind Lập Trình"
                                title="Brand Tech">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Brand Tech">Brand Tech</a></h3>
                            <p>Giải pháp công nghệ toàn diện giúp doanh nghiệp xây dựng và phát triển thương hiệu, bao gồm
                                nhận diện thương hiệu số và tối ưu hóa hoạt động kỹ thuật số.</p>
                            <a target="_self" class="smooth more" href="#app-nen-tang"
                                title="Xem thêm về Brand Tech">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner" id="khach-hang" data-animate-in="fadeIn">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Hơn 60+ doanh nghiệp đã sử dụng Solution Marketing</h2>
                <p>
                    <span style="font-family: arial, helvetica, sans-serif;">
                        Để xây dựng thương hiệu hiệu quả, gia tăng doanh thu, đầy
                        đủ thông tin trên mọi nền tảng e-commerce
                    </span>
                </p>
            </div>
            <div class="customers_partner customers_partner_desktop">
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/usanaillasvegas.png') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/hellonailsbar.jpg') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/chailotrucho.png') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/sunmarketingservice.png') }}></a>

                </div>
                <div class="li">
                    <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                            data-src={{ asset('./images/logo/vsnailstudioiowa.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/victorianailspamorganhill.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/phutungdoanlong.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/gennailsspaoh.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/topartnails.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/margaritanail.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/venetiannailsspakaty.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/logomimosa.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/acqualuxenailsspachevychase.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/starnailsspaelcajon.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/comboluxurynailsandspa.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/deluxenailspasaco.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/casaviet.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/easternmarketnails.png') }}></a>

                </div>
            </div>

            <div class="customers_partner customers_partner_mobile">
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/usanaillasvegas.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/easternmarketnails.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/casaviet.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/deluxenailspasaco.png') }}></a>
                </div>
                <div class="item">
                    <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                            data-src={{ asset('./images/logo/comboluxurynailsandspa.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/starnailsspaelcajon.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/acqualuxenailsspachevychase.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/logomimosa.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/venetiannailsspakaty.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/margaritanail.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/topartnails.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/gennailsspaoh.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/phutungdoanlong.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/victorianailspamorganhill.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/chailotrucho.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/vsnailstudioiowa.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/sunmarketingservice.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/hellonailsbar.jpg') }}></a>
                </div>
            </div>
        </div>
    </section>
    <section class="you_choose_cnv">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Lý do bạn nên chọn Wind Lập Trình</h2>
            </div>
            <div class="row">
                <div class="portfolio_choose_cnv">
                    <div class="img">
                        <a data-toggle="modal" data-target="#informationForm" href="#information-form"><img
                                src={{ asset('./images/storyset/task.png') }} class="lazy" alt=""
                                width="676" height="598"></a>
                    </div>
                    <div class="items">
                        <div class="item">
                            <h2>Marketing</h2>
                            <span>Chuyên cung cấp giải pháp thương hiệu toàn diện với hơn 40+ khách hàng hài lòng, giúp
                                doanh nghiệp xây dựng dấu ấn khác biệt.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Chi phí tối ưu</h2>
                            <span>
                                Với mức giá chỉ từ 20.000.000đ, bạn có thể sở hữu giải pháp thương mại điện tử đa nền tảng
                                bao gồm website, Zalo Mini App, TikTok, Instagram, Shopee và nhiều nền tảng khác, tối ưu hóa
                                đầu tư và tăng khả năng tiếp cận khách hàng.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Bran Tech</h2>
                            <span>Thời gian định hình thương hiệu nhanh chóng chỉ trong 2 tháng, giúp bạn sẵn sàng mở rộng
                                và phát triển thương hiệu trên nhiều nền tảng khác nhau.</span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Công nghệ</h2>
                            <span>
                                Wind Lập Trình luôn tiên phong áp dụng công nghệ mới nhất để tối ưu hóa hiệu quả vận hành
                                thương hiệu, giúp doanh nghiệp duy trì lợi thế cạnh tranh.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Hệ thống vận hành</h2>
                            <span>
                                Wind Lập Trình cập nhật liên tục các giải pháp marketing tiên tiến, đảm bảo doanh nghiệp của
                                bạn thu hút và giữ chân khách hàng tiềm năng.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Thế hệ GenZ</h2>
                            <span>
                                Đội ngũ Gen Z sáng tạo và năng động, mang đến sự linh hoạt và tư duy mới mẻ trong việc áp
                                dụng công nghệ hiện đại.
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="app_nen_tang" id="app-nen-tang">
        <div class="container">
            <div class="headbox">
                <h2 class="title">E-commerce Solutions</h2>
                <p>Giải pháp toàn diện giúp doanh nghiệp phát triển ứng dụng web, Mini App và phần mềm quản lý khách hàng hiệu quả.</p>
            </div>
            <div class="row">
                <div class="col-lg-9 offset-lg-3 group_tab_app_nen_tang">
                    <ul class="nav_app nav">
                        <li>
                            <a data-toggle="tab" class="smooth active" href="#tab1" title="">Website, Mini App</a>
                        </li>

                        <li>
                            <a data-toggle="tab" class="smooth " href="#tab2" title="">Brand Tech</a>
                        </li>

                        <li>
                            <a data-toggle="tab" class="smooth " href="#tab3" title="">Sofware Manager</a>
                        </li>
                    </ul>
                </div>

                <div class="row group_content_he_sinh_thai">


                    <div class="col-lg-3 thumbnail_app">
                        <img src={{asset("./images/storyset/data.png")}} alt="">
                        <p class="title-solution-ecommerce">Giải pháp về thương mại điện tử</p>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="item_tab tab-pane fade active show" id="tab1">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img class="lazy" data-src={{asset("./images/solution/desgin-website.png")}}
                                            alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Ứng dụng được thiết kế với khả năng mở rộng, dễ dàng tích hợp thêm các tính năng mới và phù hợp với sự phát triển của doanh nghiệp trong tương lai.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Đảm bảo tốc độ nhanh và ổn định, mang đến trải nghiệm liền mạch dù trên website hay Mini App.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">  Ứng dụng được cá nhân hóa theo phong cách thương hiệu, giúp xây dựng sự nhận diện và gắn kết với khách hàng..</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Cung cấp tính năng như đặt hàng, lịch hẹn, theo dõi ưu đãi, và quản lý tài khoản trực tiếp trên ứng dụng.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Hỗ trợ doanh nghiệp cập nhật thông tin và theo dõi lịch sử khách hàng, giúp quản lý dễ dàng và chính xác.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Thông tin khách hàng được bảo vệ tối đa, giúp người dùng yên tâm khi sử dụng dịch vụ và giao dịch.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item_tab tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img class="image-desgin-item" src={{asset("./images/solution/brand-tech.png")}} alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Nhận thông tin đặt lịch, đặt hàng nhanh chóng
                                                từ khách
                                                hàng</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Nhận thông báo khi có nhiệm vụ mới cần xử lý
                                            </p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Thực hiện nhiệm vụ, chụp hình trạng thái khách,
                                                trước và
                                                sau khi phục vụ </p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Quản lý, phân loại, xem báo cáo danh sách khách
                                                hàng đã/
                                                đang/ sẽ phục vụ, từ đó đưa ra những quyết định phù hợp.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Đơn giản hoá, tiết kiệm thời gian các công việc
                                                liên
                                                quan đến thống kê, báo cáo, ... giúp việc quy trình vận hành tại chi
                                                nhánh tinh giản, hiệu quả</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item_tab tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img src="default/images/template_new/app_nhan_vien.png" alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src="default/images/template_new/like_app_nghanh.png"
                                                    alt=""> Quản lý sơ đồ bàn</p>
                                            <p><img class="lazy"
                                                    data-src="default/images/template_new/like_app_nghanh.png"
                                                    alt=""> Quản lý timeline các bàn đang còn trống</p>
                                            <p><img class="lazy"
                                                    data-src="default/images/template_new/like_app_nghanh.png"
                                                    alt=""> Quản lý ưu đãi của quán và khách</p>
                                            <p><img class="lazy"
                                                    data-src="default/images/template_new/like_app_nghanh.png"
                                                    alt=""> Quản lý lịch sử booking của khách hàng</p>
                                            <p><img class="lazy"
                                                    data-src="default/images/template_new/like_app_nghanh.png"
                                                    alt=""> Quản lý thẻ gửi rượu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <section class="app_nghanh_hang" id="nganh-hang">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Các App ngành hàng của CNV Loyalty</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav_app nav">
                        <li>
                            <a data-toggle="tab" class="smooth active" href="#app-nganh-retail" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-ban-le.png"
                                    alt="">
                                App Ngành Retail
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-f-b" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-fb.png" alt="">
                                App Ngành F &amp; B
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-fitness" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-fitness.png"
                                    alt="">
                                App Ngành Fitness
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-spa" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-spa.png" alt="">
                                App Ngành Spa
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-auto" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-auto.png" alt="">
                                App Ngành Auto
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#nganh-hospitality" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-ban-le.png"
                                    alt="">
                                Ngành Hospitality
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="item_tab tab-pane fade active show" id="app-nganh-retail">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="storage/retail.jpg" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành Bán lẻ</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"xây="" dựng="" chương=""
                                                trình="" khách="" hàng="" thân=""
                                                thiết,="" tích="" điểm,="" đổi="" điểm"}"=""
                                                data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Xây
                                                dựng chương trình khách hàng thân thiết, tích điểm, đổi quà</span>
                                        </p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"tính="" năng="" ecommerce:=""
                                                đặt="" mua="" sản="" phẩm=""
                                                ngay="" tại="" app"}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Tính
                                                năng ecommerce: mua hàng, quản lý đơn hàng tại App</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"kết="" nối="" với=""
                                                các="" cổng="" thanh="" toán,=""
                                                vận="" chuyển,="" crm,="" pos,="" erp,.."}"=""
                                                data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Kết
                                                nối với các cổng thanh toán, vận chuyển, CRM, POS, ERP,..</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"tìm="" kiếm="" cửa=""
                                                hàng/chi="" nhánh="" gần="" nhất"}"=""
                                                data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Tìm
                                                kiếm cửa hàng/chi nhánh gần nhất</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"chức="" năng="" cấp=""
                                                mã="" bảo="" hành="" online="" (=""
                                                thay="" thế="" thẻ="" bảo=""
                                                hành="" truyền="" thống)"}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Chức
                                                năng cấp mã bảo hành online ( thay thế thẻ bảo hành truyền
                                                thống)</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-retail.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-f-b">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="/storage/fnb.jpg" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành F &amp; B</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Khách hàng có thể chủ động đặt bàn, doanh nghiệp dễ dàng quản lý lịch đặt&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Khách
                                                hàng có thể chủ động đặt bàn, doanh nghiệp dễ dàng quản lý lịch
                                                đặt</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đặt món online, áp dụng cho cả giao tận nơi và khách đến lấy&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Đặt
                                                món online, áp dụng cho cả giao tận nơi và khách đến lấy</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đưa cả cửa hàng lên app bằng tính năng Topping độc quyền&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Đưa
                                                cả cửa hàng lên app bằng tính năng Topping độc quyền</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tự động gợi ý các món ăn/ thức uống liên quan&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Tự
                                                động gợi ý các món ăn/ thức uống liên quan</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đánh giá, khảo sát độ hài lòng khách hàng sau khi sử dụng/ dùng bữa&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Đánh
                                                giá, khảo sát độ hài lòng khách hàng sau khi sử dụng/ dùng
                                                bữa</span></p>
                                        <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đánh giá, khảo sát độ hài lòng khách hàng sau khi sử dụng/ dùng bữa&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}"><img
                                                    src="default/images/template_new/like_app_nghanh.png"
                                                    alt="">Gửi
                                                thông tin về các chương trình ưu đãi</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-f-b.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-fitness">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="/storage/fitness.jpg" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành Fitness</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt="">
                                            Thay thế thẻ member cứng, chật ví giúp tích điểm, thăng hạng dễ dàng</p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tính năng check-in bằng QR Code thay thế máy móc cồng kềnh&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Tính
                                                năng check-in bằng QR Code thay thế máy móc cồng kềnh</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Khách hàng có thể mua gói tập và quản lý gói tập ngay tại app&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Khách
                                                hàng có thể mua gói tập và quản lý gói tập ngay tại app</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đặt lịch tập, chọn PT, chọn phòng tập mong muốn&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Đặt
                                                lịch tập, chọn PT, chọn phòng tập mong muốn</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tính năng topup nạp trước dùng sau sang trọng đẳng cấp&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Tính
                                                năng topup nạp trước dùng sau sang trọng đẳng cấp</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-fitness.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-spa">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="/storage/spa.jpg" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành Spa</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Khách hàng chủ động việc đặt lịch hẹn/chọn kỹ thuật viên, doanh nghiệp quản lý được lịch đặt&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Khách
                                                hàng chủ động việc đặt lịch hẹn/chọn kỹ thuật viên, doanh nghiệp
                                                quản lý được lịch đặt</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tính năng mua &amp; quản lý liệu trình, tự động trừ đi số lần đã sử dụng&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Tính
                                                năng mua &amp; quản lý liệu trình, tự động trừ đi số lần đã sử
                                                dụng</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Lưu trữ ảnh trước và sau để củng cố thêm niềm tin vào dịch vụ&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Lưu
                                                trữ ảnh trước và sau để củng cố thêm niềm tin vào dịch vụ</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Thông báo ra mắt dịch vụ/liệu trình/chính sách mới&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Thông
                                                báo ra mắt dịch vụ/liệu trình/chính sách mới</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Cập nhật sớm nhất những chương trình khuyến mãi, ưu đãi.&quot;}"
                                                data-sheets-userformat="{&quot;2&quot;:573,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;12&quot;:0}">Cập
                                                nhật sớm nhất những chương trình khuyến mãi, ưu đãi.</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-spa.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-auto">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="/storage/auto.jpg" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành Auto</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"số="" hoá="" thẻ=""
                                                cứng="" bảo="" dưỡng="" sang=""
                                                tài="" khoản="" thành="" viên=""
                                                hiện="" tại."}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Số
                                                hoá thẻ cứng bảo dưỡng sang tài khoản thành viên hiện tại.</span>
                                        </p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"mua="" gói="" bảo=""
                                                hành/="" bảo="" trì/="" bảo=""
                                                dưỡng="" đơn="" giản="" ngay=""
                                                tại="" app."}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Mua
                                                gói bảo hành/ bảo trì/ bảo dưỡng đơn giản ngay tại app.</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"đặt="" lịch/="" quản=""
                                                lý="" lịch="" hẹn="" chăm=""
                                                sóc="" xe="" với="" những=""
                                                thao="" tác="" dễ="" dàng"}"=""
                                                data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Đặt
                                                lịch/ quản lý lịch hẹn chăm sóc xe với những thao tác dễ dàng</span>
                                        </p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"lưu="" trữ="" đầy=""
                                                đủ="" lịch="" sử="" việc=""
                                                chăm="" sóc="" xe="" tại=""
                                                cửa="" hàng,="" nắm="" được=""
                                                thời="" gian="" tái="" bảo=""
                                                dưỡng,="" phụ="" kiện="" đã=""
                                                thay="" thế."}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Lưu
                                                trữ đầy đủ lịch sử việc chăm sóc xe tại cửa hàng, nắm được thời gian
                                                tái bảo dưỡng, phụ kiện đã thay thế.</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"tính="" năng="" phát=""
                                                sinh="" sửa="" chữa="" giúp=""
                                                khách="" hàng="" nhận="" báo=""
                                                giá="" nhanh="" chóng."}"="" data-sheets-userformat="{"
                                                2":573,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0}"="">Tính
                                                năng phát sinh sửa chữa giúp khách hàng nhận báo giá nhanh
                                                chóng.</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-auto.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="nganh-hospitality">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src="/storage/hospitality.png" alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Ưu điểm của App ngành Hospitality</h2>
                                    <div class="content">
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"khách="" hàng="" có=""
                                                thể="" chủ="" động="" đặt=""
                                                phòng="" mà="" không="" cần=""
                                                gọi="" trước="" hotline"}"="" data-sheets-userformat="{"
                                                2":2621,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0,"14":{"1":2,"2":9961472}}"="">Khách
                                                hàng có thể chủ động đặt phòng mà không cần gọi trước hotline</span>
                                        </p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"dễ="" dàng="" booking=""
                                                các="" dịch="" vụ="" trang=""
                                                trí,="" sản="" phẩm="" hỗ=""
                                                trợ,="" hoặc="" dịch="" vụ=""
                                                liên="" quan"}"="" data-sheets-userformat="{"
                                                2":2621,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0,"14":{"1":2,"2":9961472}}"="">Dễ
                                                dàng booking các dịch vụ trang trí, sản phẩm hỗ trợ, hoặc dịch vụ
                                                liên quan</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"lưu="" trữ="" thông=""
                                                tin="" cá="" nhân="" hỗ=""
                                                trợ="" cho="" việc="" bỏ=""
                                                qua="" bước="" xác="" minh=""
                                                giấy="" tờ"}"="" data-sheets-userformat="{"
                                                2":2621,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0,"14":{"1":2,"2":9961472}}"="">Lưu
                                                trữ thông tin cá nhân hỗ trợ cho việc bỏ qua bước xác minh giấy
                                                tờ</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"tính="" năng="" topup=""
                                                nạp="" trước="" dùng="" sau=""
                                                sang="" trọng="" đẳng="" cấp"}"=""
                                                data-sheets-userformat="{"
                                                2":2621,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0,"14":{"1":2,"2":9961472}}"="">Tính
                                                năng topup nạp trước dùng sau sang trọng đẳng cấp</span></p>
                                        <p><img src="default/images/template_new/like_app_nghanh.png" alt=""><span
                                                data-sheets-value="{" 1":2,"2":"liên="" hệ="" dễ=""
                                                dàng="" với="" tổng="" đài,=""
                                                lễ="" tân="" thông="" qua=""
                                                tính="" năng="" call-in-app"}"=""
                                                data-sheets-userformat="{"
                                                2":2621,"3":{"1":0},"5":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"6":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"7":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"8":{"1":[{"1":2,"2":0,"5":{"1":2,"2":0}},{"1":0,"2":0,"3":3},{"1":1,"2":0,"4":1}]},"12":0,"14":{"1":2,"2":9961472}}"="">Liên
                                                hệ dễ dàng với tổng đài, lễ tân thông qua tính năng
                                                call-in-app</span></p>
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/nganh-hospitality.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 group_link_dang_ky">
                    <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                        href="#information-form"><img class="lazy" data-src="default/images/template_new/Calling.png"
                            alt="">Đăng ký tư vấn</a>
                    <a class="event_btn event_btn_two btn_hover" data-toggle="modal" data-target="#informationForm"
                        href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a>
                </div>
            </div>
        </div>
    </section>
    <section class="enterprise_solutions">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Những tính năng nổi bật</h2>

            </div>

            <div class="row">
                <div class="portfolio">
                    <div class="img">
                        <img class="lazy" data-src="storage/giap-phap-so-1/giai-phap-doanh-nghiep.png" alt=""
                            width="591" height="679">
                    </div>
                    <div class="items solution_app_desktop">
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-tich-diem.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Tích điểm, tạo ưu đãi, đổi thưởng</a>
                            </h3>
                            <span>Tự động hoá quá trình thông báo ưu đãi đến khách hàng, sử dụng ưu đãi và tích
                                điểm. ...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-marketing-0-dong.png"
                                    alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Marketing 0 đồng</a></h3>
                            <span>Đẩy thông báo đến user những người phù hợp, đúng nhu cầu từ những hành
                                vi...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-ca-nhan-hoa.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Cá nhân hóa từng khách hàng</a></h3>
                            <span>Có sẵn mẫu kịch bản để doanh nghiệp cá nhân hóa khách hàng, xây dựng ...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-bao-cao-du-lieu.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Báo cáo dữ liệu theo tuần, tháng, chiến
                                    dịch</a></h3>
                            <span>Hỗ trợ doanh nghiệp nhìn nhận đúng, đúc kết kinh nghiệm qua những số liệu thực
                                tế...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>



                    </div>

                    <div class="items solution_app_mobile">
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-tich-diem.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Tích điểm, tạo ưu đãi, đổi thưởng</a>
                            </h3>
                            <span>Tự động hoá quá trình thông báo ưu đãi đến khách hàng, sử dụng ưu đãi và tích
                                điểm. ...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-marketing-0-dong.png"
                                    alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Marketing 0 đồng</a></h3>
                            <span>Đẩy thông báo đến user những người phù hợp, đúng nhu cầu từ những hành
                                vi...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-ca-nhan-hoa.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Cá nhân hóa từng khách hàng</a></h3>
                            <span>Có sẵn mẫu kịch bản để doanh nghiệp cá nhân hóa khách hàng, xây dựng ...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>
                        <div class="item">
                            <a href="index.htm"><img class="lazy"
                                    data-src="storage/giai-phap-so-1-tao-app/icon-bao-cao-du-lieu.png" alt=""></a>
                            <h3 class="title smooth"><a href="index.htm">Báo cáo dữ liệu theo tuần, tháng, chiến
                                    dịch</a></h3>
                            <span>Hỗ trợ doanh nghiệp nhìn nhận đúng, đúc kết kinh nghiệm qua những số liệu thực
                                tế...</span>
                            <p class="more_details"><a class="more" href="tinh-nang.html">Xem thêm</a></p>
                        </div>



                    </div>

                </div>

                <a href="tinh-nang.html" class="load_all">Xem tất cả</a>

            </div>

        </div>


    </section>
    <section class="talk_cnv">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Báo chí nói về CNV Loyalty</h2>
            </div>
            <div class="talk-cnv-cas">
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/brand-vietnam.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/dau-tu-online-1.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/theleader.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/vnexpress.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/vtv.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/brand-vietnam.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/dau-tu-online-1.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/theleader.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/vnexpress.png" alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src="storage/bao-chi-noi-cnv/vtv.png" alt="">
                    </a>
                </div>
            </div>


        </div>

        <div class="container_group_post_talk_cnv">
            <div class="container container_post_talk_cnv">
                <div class="row">


                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="blogs/tin-tuc/chuyen-gia-cong-nghe-tu-salesforce-chi-ra-bat-cap-cua-startup-vua-duoc-shark-hung-dau-tu-van-con-phat-trien-theo-tu-duy-xe-ba-gac-thi-muc-tieu-dinh-gia-100-trieu-usd-la-khong-tuong.html"
                                    title="">Chuyên gia công nghệ từ Salesforce chỉ ra bất cập của startup
                                    vừa được
                                    Shark Hưng đầu tư: Vẫn còn phát triển theo tư duy ‘xe ba gác’ thì mục tiêu định
                                    giá 100 triệu USD là không tưởng</a></h3>
                            <div class="description">Tóm lại, CNV Loyalty còn rất nhiều việc phải làm phía trước.
                                Nếu họ tiếp tục dàn hàng ngang theo tư duy “xe ba gác” – ‘vừa chở hàng, vừa chở
                                người’, tức cái...</div>
                        </div>
                        <a class="img"
                            href="blogs/tin-tuc/chuyen-gia-cong-nghe-tu-salesforce-chi-ra-bat-cap-cua-startup-vua-duoc-shark-hung-dau-tu-van-con-phat-trien-theo-tu-duy-xe-ba-gac-thi-muc-tieu-dinh-gia-100-trieu-usd-la-khong-tuong.html"
                            title="">
                            <img class="lazy" data-src="/storage/b30e1215abea5fb406fb.jpg" alt=""
                                title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="blogs/tin-tuc/lai-mot-startup-cua-shark-binh-duoc-cac-shark-mom-cung-lien-tuc-gianh-giat-dau-tu-voi-dinh-gia-gap-25-lan-chi-sau-vai-thang.html"
                                    title="">Lại một startup của Shark Bình, được các Shark ‘mớm cung’ liên
                                    tục,
                                    giành giật đầu tư với định giá gấp 2,5 lần chỉ sau vài tháng?</a></h3>
                            <div class="description">“Đúng vào thời điểm CNV Loyalty cần một người bạn đồng hành
                                hơn
                                là một người chỉ có tiền thì may ra Shark Bình đã có được cả hai!”, TGĐ CNV Loyalty
                                Nguyễn Tu...</div>
                        </div>
                        <a class="img"
                            href="blogs/tin-tuc/lai-mot-startup-cua-shark-binh-duoc-cac-shark-mom-cung-lien-tuc-gianh-giat-dau-tu-voi-dinh-gia-gap-25-lan-chi-sau-vai-thang.html"
                            title="">
                            <img class="lazy" data-src="/storage/photo-3-1626066781473499933800.jpeg" alt=""
                                title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="blogs/tin-tuc/soi-lai-man-goi-von-cua-cnv-loyalty-lai-mot-startup-cua-shark-binh-duoc-cac-shark-mom-cung-lien-tuc-gianh-giat-dau-tu-voi-dinh-gia-gap-25-lan-chi-sau-vai-thang.html"
                                    title="">Soi lại màn gọi vốn của CNV Loyalty: Lại một startup của Shark
                                    Bình,
                                    được các Shark ‘mớm cung’ liên tục, giành giật đầu tư với định giá gấp 2,5 lần
                                    chỉ sau vài tháng?</a></h3>
                            <div class="description">&quot;Tôi được biết, đã có một công ty thành viên của
                                NextTech
                                đang hợp tác và hỗ trợ cho các bạn&quot;, Shark Bình nói trên truyền hình, bày tỏ sự
                                hứng thú nhưng để đ...</div>
                        </div>
                        <a class="img"
                            href="blogs/tin-tuc/soi-lai-man-goi-von-cua-cnv-loyalty-lai-mot-startup-cua-shark-binh-duoc-cac-shark-mom-cung-lien-tuc-gianh-giat-dau-tu-voi-dinh-gia-gap-25-lan-chi-sau-vai-thang.html"
                            title="">
                            <img class="lazy" data-src="/storage/photo1626066926053-1626066926293188617366_2.png"
                                alt="" title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="blogs/tin-tuc/neu-van-tu-duy-xe-ba-gac-nen-tang-cnv-loyalty-se-kho-ra-khoi.html"
                                    title="">Nếu vẫn tư duy “xe ba gác”, nền tảng CNV Loyalty sẽ khó “ra
                                    khơi”</a>
                            </h3>
                            <div class="description">Đánh giá về nền tảng chăm sóc khách hàng (CSKH) trên mạng xã
                                hội (MXH) - CNV Loyalty, chuyên gia Nam Nguyễn, khẳng định, nếu startup này tiếp tục
                                theo đuổi t...</div>
                        </div>
                        <a class="img"
                            href="blogs/tin-tuc/neu-van-tu-duy-xe-ba-gac-nen-tang-cnv-loyalty-se-kho-ra-khoi.html"
                            title="">
                            <img class="lazy" data-src="/storage/968a8712-1625462375800191645149.jpg" alt=""
                                title="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container load_more_post_talk_cnv">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <a href="blogs/bao-chi-noi-ve-cnv-loyalty.html"> → Xem thêm các bài báo tương tự </a>
                </div>
            </div>
        </div>

    </section>
    <section class="group_case_study">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Case study điển hình</h2>
            </div>
            <div class="row row_group">
                <div class="case_study col-lg-12">

                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-danavi-mart_2.jpg" alt=""
                                    title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/case-study-dien-hinh/chuyen-minh-ngoan-muc-danavi-mart-tang-truong-manh-me-voi-zalo-mini-app.html">Chuyển
                                        Mình Ngoạn Mục: Danavi Mart Tăng Trưởng Mạnh Mẽ Với Zalo Mini App</a></h2>
                                <p class="description_case">
                                    Danavi Mart, một chuỗi siêu thị nổi tiếng tại Việt Nam, đã từng gặp khó khăn
                                    trong việc tạo dựng sự khác biệt và thu hút khách hàng trong thị trường bán lẻ
                                    đ...
                                </p>

                                <a href="blogs/case-study-dien-hinh/chuyen-minh-ngoan-muc-danavi-mart-tang-truong-manh-me-voi-zalo-mini-app.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/dokki.png" alt="" title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/case-study-dien-hinh/chuc-mung-dookki-da-so-huu-app-cham-soc-khach-hang.html">CHÚC
                                        MỪNG DOOKKI ĐÃ SỞ HỮU APP CHĂM SÓC KHÁCH HÀNG</a></h2>
                                <p class="description_case">
                                    Cảm ơn Dookki đã tin tưởng và lựa chọn nền tảng CNV Loyalty với #Loyalty_App
                                </p>

                                <a href="blogs/case-study-dien-hinh/chuc-mung-dookki-da-so-huu-app-cham-soc-khach-hang.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/kafela.png" alt="" title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/case-study-dien-hinh/chuc-mung-kafela-coffee-da-so-huu-app-cham-soc-khach-hang.html">CHÚC
                                        MỪNG KAFELA COFFEE ĐÃ SỞ HỮU APP CHĂM SÓC KHÁCH HÀNG</a></h2>
                                <p class="description_case">
                                    Cảm ơn Kafela Coffee đã tin tưởng và lựa chọn nền tảng CNV Loyalty với
                                    #Loyalty_App
                                </p>

                                <a href="blogs/case-study-dien-hinh/chuc-mung-kafela-coffee-da-so-huu-app-cham-soc-khach-hang.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/daohaisan.png" alt="" title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/case-study-dien-hinh/chuc-mung-dao-hai-san-da-so-huu-app-cham-soc-khach-hang.html">CHÚC
                                        MỪNG ĐẢO HẢI SẢN ĐÃ SỞ HỮU APP CHĂM SÓC KHÁCH HÀNG</a></h2>
                                <p class="description_case">
                                    Chúc mừng Đảo Hải Sản đã sở hữu App Chăm sóc khách hàng
                                </p>

                                <a href="blogs/case-study-dien-hinh/chuc-mung-dao-hai-san-da-so-huu-app-cham-soc-khach-hang.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/blusaigon.png" alt="" title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/case-study-dien-hinh/chuc-mung-blusaigon-da-so-huu-app-cham-soc-khach-hang.html">CHÚC
                                        MỪNG BLUSAIGON ĐÃ SỞ HỮU APP CHĂM SÓC KHÁCH HÀNG</a></h2>
                                <p class="description_case">
                                    Chúc mừng BLUSAIGON đã gọi vốn thành công trong Shark Tank tập 4
                                </p>

                                <a href="blogs/case-study-dien-hinh/chuc-mung-blusaigon-da-so-huu-app-cham-soc-khach-hang.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/1.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Chương trình hỗ trợ 10.000 doanh nghiệp tạo app chăm sóc khách
                                    hàng.</h2>
                            </div>

                            <div class="group_post_case text-center">
                                <h2 class="title"><a
                                        href="blogs/tin-tuc/chuc-mung-su-hop-tac-thanh-cong-giua-cnv-loyalty-va-inn-saigon.html">CHÚC
                                        MỪNG SỰ HỢP TÁC THÀNH CÔNG GIỮA CNV LOYALTY VÀ INN SAIGON</a></h2>
                                <p class="description_case">
                                    ? CNV Loyalty cảm ơn #Inn_SaiGon đã lựa chọn nền tảng #Loyalty_App ?
                                </p>

                                <a href="blogs/tin-tuc/chuc-mung-su-hop-tac-thanh-cong-giua-cnv-loyalty-va-inn-saigon.html"
                                    class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="group_news h-posts">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Kiến thức & thư viện ebook miễn phí</h2>
            </div>
            <ul class="nav">
                <li><a class="smooth active show" data-toggle="tab" href="#tin-tuc" title="">Bài
                        viết</a></li>
                <li><a class="smooth" data-toggle="tab" href="#ebook" title="">Ebook miễn phí</a>
                </li>
            </ul>
            <div class="tab-content tab-content-news">
                <div id="tin-tuc" class="tab-pane fade in active show">
                    <div class="row row-ibl">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="blogs/tin-tuc/supermom-ung-dung-mini-game-tren-zalo-mini-app-pha-dao-thi-truong-me-be.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/cnv-x-supermom-1.png"
                                        alt="" title="">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/supermom-ung-dung-mini-game-tren-zalo-mini-app-pha-dao-thi-truong-me-be.html"
                                        class="article-title">Supermom ứng dụng Mini Game trên Zalo Mini App “phá
                                        đảo” thị trường Mẹ &amp; Bé</a>
                                </div>
                                <div class="description">
                                    Supermom - một cái tên không mấy xa lạ trong ngành Mẹ và Bé - đã tiên phong ứng
                                    dụng tổ chức Mini Game trên Zalo Mini App để tiếp cận gần hơn và mang đến trả...
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/supermom-ung-dung-mini-game-tren-zalo-mini-app-pha-dao-thi-truong-me-be.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="blogs/tin-tuc/xay-dung-mini-app-mang-thuong-hieu-rieng.html" target="_blank">
                                    <img class="news-blog fade show lazy"
                                        data-src="/storage/showcase-amp-case-study-6.png" alt=""
                                        title="">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/xay-dung-mini-app-mang-thuong-hieu-rieng.html"
                                        class="article-title">XÂY DỰNG MINI APP MANG THƯƠNG HIỆU RIÊNG</a>
                                </div>
                                <div class="description">
                                    Mini App là bước đột phá “thổi bừng” trải nghiệm khách hàng với thương hiệu của
                                    bạn, không những tăng tương tác trực tuyến/ trực tiếp, nó còn hỗ trợ gửi tin...
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/xay-dung-mini-app-mang-thuong-hieu-rieng.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="blogs/tin-tuc/cnv-va-grow-academy-ky-ket-hop-tac-chien-luoc-dot-pha.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/cnv-x-grow-academy-1.png"
                                        alt="" title="">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/cnv-va-grow-academy-ky-ket-hop-tac-chien-luoc-dot-pha.html"
                                        class="article-title">CNV và Grow Academy Ký Kết Hợp Tác Chiến Lược Đột
                                        Phá</a>
                                </div>
                                <div class="description">
                                    CNV và Grow Academy vừa chính thức ký kết thỏa thuận hợp tác chiến lược, đánh
                                    dấu bước ngoặt quan trọng trong hành trình phát triển của cả hai tổ chức.
                                    Thỏa...
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/cnv-va-grow-academy-ky-ket-hop-tac-chien-luoc-dot-pha.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-12 text-center load_more_new">
                            <a href="blogs/tin-tuc.html"> →Xem tất cả bài viết </a>
                        </div>

                    </div>
                </div>
                <div id="ebook" class="tab-pane fade">
                    <div class="row row-ibl">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item ">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="ebooks/thu-vien-ebook/ebook-case-study-huong-dan-trien-khai-hieu-qua-chuong-trinh-khach-hang-than-thiet.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/ebook-cover/ebook-16.jpg"
                                        alt="Ebook: [Case Study] Hướng dẫn triển khai hiệu quả chương trình khách hàng thân thiết"
                                        title="Ebook: [Case Study] Hướng dẫn triển khai hiệu quả chương trình khách hàng thân thiết">
                                </a>
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> Tue, 02/02/2021
                                </div>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/ebook-case-study-huong-dan-trien-khai-hieu-qua-chuong-trinh-khach-hang-than-thiet.html"
                                        class="article-title">Ebook: [Case Study] Hướng dẫn triển khai hiệu quả
                                        chương trình khách hàng thân thiết</a>
                                </div>
                                <div class="description">
                                    88% công ty chia sẻ rằng họ đang trải qua quá trình chuyển đổi số (nguồn:
                                    Altimeter Group). 85% thành viên ban lãnh đạo tại doanh nghiệp cho biết họ cần
                                    tìm....
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/ebook-case-study-huong-dan-trien-khai-hieu-qua-chuong-trinh-khach-hang-than-thiet.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item ">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="ebooks/thu-vien-ebook/ebook-ap-dung-ngay-bi-kip-marketing-thuc-chien-gia-tang-doanh-so-cho-chu-doanh-nghiep-spa-tham-my-vien.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/ebook-15_2.jpg"
                                        alt="Ebook: [Áp dụng ngay] Bí kíp Marketing thực chiến gia tăng doanh số cho chủ doanh nghiệp Spa - Thẩm mỹ viện"
                                        title="Ebook: [Áp dụng ngay] Bí kíp Marketing thực chiến gia tăng doanh số cho chủ doanh nghiệp Spa - Thẩm mỹ viện">
                                </a>
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> Mon, 01/02/2021
                                </div>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/ebook-ap-dung-ngay-bi-kip-marketing-thuc-chien-gia-tang-doanh-so-cho-chu-doanh-nghiep-spa-tham-my-vien.html"
                                        class="article-title">Ebook: [Áp dụng ngay] Bí kíp Marketing thực chiến
                                        gia
                                        tăng doanh số cho chủ doanh nghiệp Spa - Thẩm mỹ viện</a>
                                </div>
                                <div class="description">
                                    Trong một cuộc khảo sát với 1.000 khách hàng nữ có nhu cầu làm đẹp tại các Spa,
                                    thẩm mỹ viện, có tới 70% trong số họ khi đi đến Spa mới quyết định sử dụng dị...
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/ebook-ap-dung-ngay-bi-kip-marketing-thuc-chien-gia-tang-doanh-so-cho-chu-doanh-nghiep-spa-tham-my-vien.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item ">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="ebooks/thu-vien-ebook/ebook-co-vi-du-chien-luoc-tang-doanh-so-tu-khach-hang-cu-cho-doanh-nghiep.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy"
                                        data-src="/storage/ebook-cover/ebook-5-flat.png"
                                        alt="Ebook: [Có Ví Dụ] Chiến lược Tăng doanh số từ khách hàng cũ cho doanh nghiệp"
                                        title="Ebook: [Có Ví Dụ] Chiến lược Tăng doanh số từ khách hàng cũ cho doanh nghiệp">
                                </a>
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> Mon, 01/02/2021
                                </div>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/ebook-co-vi-du-chien-luoc-tang-doanh-so-tu-khach-hang-cu-cho-doanh-nghiep.html"
                                        class="article-title">Ebook: [Có Ví Dụ] Chiến lược Tăng doanh số từ khách
                                        hàng cũ cho doanh nghiệp</a>
                                </div>
                                <div class="description">
                                    “20% khách hàng trung thành của một công ty có thể tạo ra 80% lợi nhuận là một
                                    nghiên cứu từ Gartner Group. Ngoài ra, chi phí để có một khách hàng mới sẽ
                                    cao...
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/ebook-co-vi-du-chien-luoc-tang-doanh-so-tu-khach-hang-cu-cho-doanh-nghiep.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-12 col-12 text-center load_more_new">
                        <a href="ebooks/thu-vien-ebook.html"> →Xem tất cả bài viết </a>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
