@extends('layouts.master')
@section('title','Home Page')
@section('content')
<section class="awe-section-1">
    <div class="slide_index">
        {{-- slider --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="home-slider owl-carousel" data-dot="false" data-nav='true' data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
                    <div class="item">
                        <a href="#" class="clearfix">
                        <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/slider_1.jpg?1509501415605" alt="New Collection">
                        </a>	
                    </div>
                    <div class="item">
                        <a href="#" class="clearfix">
                        <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/slider_2.jpg?1509501415605" alt="New Collection">
                        </a>	
                    </div>
                </div>
            </div>
        </div>
        <span class="button_drop_down"><img src="{{ asset('images/button_goto.png')}}" alt="Đi tiếp"></span>
    </div>
</section>
<section class="awe-section-2">
    <section class="section_service_first">
        <div class="container">
            <div class="row">
                <div class="wrap_srv">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="content_wrap">
                            <div class="thumb">
                                <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/send.png?1509501415605" alt="Giao hàng 14/24">
                            </div>
                            <div class="content">
                                <p class="title_">Giao hàng 14/24</p>
                                <span class="descript">Những bữa sáng ngon lành để bắt đầu ngày mới</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="content_wrap">
                            <div class="thumb">
                                <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/women.png?1509501415605" alt="Đặt bàn trực tuyến">
                            </div>
                            <div class="content">
                                <p class="title_">Đặt bàn trực tuyến</p>
                                <span class="descript">Chúng tôi luôn sẵn sàng hỗ trợ bạn, liên hệ để được hỗ trợ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="content_wrap">
                            <div class="thumb">
                                <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/tag.png?1509501415605" alt="Voucher giảm giá">
                            </div>
                            <div class="content">
                                <p class="title_">Voucher giảm giá</p>
                                <span class="descript">Đăng ký để nhận voucher giảm giá từ chúng tôi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="awe-section-3">
    <section id="gioithieu" class="section_info_site">
        <div class="container">
            <div class="row">
                <div class="wrap_if">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="modul left">
                            <div class="title_">
                                <span class="mini_title">Đến với</span>
                                <h2 class="large_title">Chúng tôi</h2>
                            </div>
                            <div class="des_">
                                <span>Đón hàng ngàn khách mỗi ngày có lẽ đã đủ để nói lên vị trí của Pasteur trong lòng người Việt và du khách bốn phương. Ai đó đã ví rằng “Nấu ăn là một nghệ thuật, người nấu ăn cũng là một nghệ sĩ”. Người nghệ sĩ tạo nên các món ăn hấp dẫn của Pasteur chẳng phải ai xa lạ, đều là những đầu bếp bình dân điêu luyện</span>
                            </div>
                            <span class="mr_view"><a class="button_more" href="#" title="Xem thêm">Xem thêm</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="modul right">
                            <div class="row">
                                <div class="padding col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="image_list left">
                                        <span><img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/banner_left_1.png?1509501415605" alt="Pasteur"></span>
                                        <span><img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/banner_left_2.png?1509501415605" alt="Pasteur"></span>
                                    </div>
                                </div>
                                <div class="padding col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="image_list right">
                                        <span><img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/banner_right_1.png?1509501415605" alt="Pasteur"></span>
                                        <span><img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/banner_right_2.png?1509501415605" alt="Pasteur"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="awe-section-4">
    <section class="section_popular_product">
        <div class="wrap_img">
            <div class="container">
                <div class="row">
                    <div class="title_ ab" onclick="window.location.href='https://pasteur.bizwebvietnam.net/san-pham-noi-bat';">
                        <span class="mini_title">Món ngon</span>
                        <h2 class="large_title">Nổi bật</h2>
                    </div>
                    <div class="wrap_owl_popular col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="owl_s o_position">
                            <div class="owl_main_popular owl-carousel owl-theme" data-dot="true" data-nav="false" data-lg-items="3" data-md-items="3" data-xs-items="1" data-sm-items="2" data-margin="0">
                                <div class="item popular_item">
                                    <div class="owl_item_product">
                                        <div class="product-box">
                                            <div class="product-thumbnail ">
                                                <a class="image_link " href="https://pasteur.bizwebvietnam.net/thit-nuong-xa-tron-bun" title="Thịt nướng xả trộn bún">
                                                <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/products/838fbd467bee4dec9e3fc8112a651e94.png?v=1502696365233" alt="Thịt nướng xả trộn bún">
                                                </a>
                                                <div class="product-action-grid clearfix">
                                                    <form action="https://pasteur.bizwebvietnam.net/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-7912870" enctype="multipart/form-data">
                                                        <div>
                                                            <a title="xem nhanh" href="https://pasteur.bizwebvietnam.net/thit-nuong-xa-tron-bun" data-handle="thit-nuong-xa-tron-bun" class="button_wh_40 btn_view right-to quick-view"><i class="icon-magnifier-add icons"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info a-left">
                                                <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/thit-nuong-xa-tron-bun" title="Thịt nướng xả trộn bún">Thịt nướng xả trộn bún</a></h3>
                                                <div class="reviews-product-grid hidden">
                                                    <div class="bizweb-product-reviews-badge" data-id="7912870"></div>
                                                </div>
                                                <div class="des_product_item"><span class="text1line"> Nguyên liệu: Thịt lợn nướng, bún, gia vị, rau sống các loại 
                                                    </span>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <span class="price product-price">240.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item popular_item">
                                    <div class="owl_item_product">
                                        <div class="product-box">
                                            <div class="product-thumbnail ">
                                                <a class="image_link " href="https://pasteur.bizwebvietnam.net/lon-quay-dac-biet" title="Lợn quay đặc biệt">
                                                <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/products/heoquaygiaohien-thitquaygiaohien-65.jpg?v=1502695405193" alt="Lợn quay đặc biệt">
                                                </a>
                                                <div class="product-action-grid clearfix">
                                                    <form action="https://pasteur.bizwebvietnam.net/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-7912561" enctype="multipart/form-data">
                                                        <div>														
                                                            <a title="xem nhanh" href="https://pasteur.bizwebvietnam.net/lon-quay-dac-biet" data-handle="lon-quay-dac-biet" class="button_wh_40 btn_view right-to quick-view"><i class="icon-magnifier-add icons"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info a-left">
                                                <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/lon-quay-dac-biet" title="Lợn quay đặc biệt">Lợn quay đặc biệt</a></h3>
                                                <div class="reviews-product-grid hidden">
                                                    <div class="bizweb-product-reviews-badge" data-id="7912561"></div>
                                                </div>
                                                <div class="des_product_item"><span class="text1line"> Nguyên liệu: Lợn quay tẩm gia vị, rau sống, dưa chuột, cùng nhiều loại rau c...</span></div>
                                                <div class="price-box clearfix">			
                                                    <span class="price product-price">199.000₫</span>												
                                                    <span class="price product-price-old">
                                                    299.000₫			
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item popular_item">
                                    <div class="owl_item_product">
                                        <div class="product-box">
                                            <div class="product-thumbnail ">
                                                <a class="image_link " href="https://pasteur.bizwebvietnam.net/set-lau-hai-san-cho-2-nguoi" title="Set lẩu hải sản cho 2 người">
                                                <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/products/1-trong-3-lau-lon-cac-loai-nam-ruou-180ml-tai-xien-que-20158410151695.jpg?v=1502695161450" alt="Set lẩu hải sản cho 2 người">
                                                </a>
                                                <div class="product-action-grid clearfix">
                                                    <form action="https://pasteur.bizwebvietnam.net/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-7912480" enctype="multipart/form-data">
                                                        <div>													
                                                            <a title="xem nhanh" href="https://pasteur.bizwebvietnam.net/set-lau-hai-san-cho-2-nguoi" data-handle="set-lau-hai-san-cho-2-nguoi" class="button_wh_40 btn_view right-to quick-view"><i class="icon-magnifier-add icons"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info a-left">
                                                <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/set-lau-hai-san-cho-2-nguoi" title="Set lẩu hải sản cho 2 người">Set lẩu hải sản cho 2 người</a></h3>
                                                <div class="reviews-product-grid hidden">
                                                    <div class="bizweb-product-reviews-badge" data-id="7912480"></div>
                                                </div>
                                                <div class="des_product_item"><span class="text1line"> Nguyên liệu: Thịt bò, bạch tuộc, rau, nấm kim, nhiều loại thực phẩm khác</span></div>
                                                <div class="price-box clearfix">			
                                                    <span class="price product-price">299.000₫</span>
                                                    <span class="price product-price-old">
                                                    330.000₫			
                                                    </span>															
                                                </div>
                                            </div>
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
</section>
<section class="awe-section-5">
    <section class="section_menu_set">
        <div class="container">
            <div class="row">
                <div class="title_ rl">
                    <h2 class="large_title">Menu Chính</h2>
                </div>
            </div>
        </div>
        <div class="tab_link_module">
        <div class="tabs-container tab_border">
            <span class="hidden-md hidden-lg button_show_tab"><i class="fa fa-navicon"></i></span>
            <span class="hidden-md hidden-lg title_check_tabs"></span>
            <div class="clearfix">
                <ul class="ul_link link_tab_check_click container">
                    <li class="li_tab">
                        <a href="#content-tabb1" class="head-tabs head-tab1" data-src=".head-tab1">Món khai vị</a>
                    </li>
                    <li class="li_tab">
                        <a href="#content-tabb2" class="head-tabs head-tab2" data-src=".head-tab2">Món sushi</a>
                    </li>
                    <li class="li_tab">
                        <a href="#content-tabb3" class="head-tabs head-tab3" data-src=".head-tab3">Món chiên</a>
                    </li>
                    <li class="li_tab">
                        <a href="#content-tabb4" class="head-tabs head-tab4" data-src=".head-tab4">Món nướng</a>
                    </li>
                    <li class="li_tab">
                        <a href="#content-tabb5" class="head-tabs head-tab5" data-src=".head-tab5">Lẩu - súp</a>
                    </li>
                    <li class="li_tab">
                        <a href="#content-tabb6" class="head-tabs head-tab6" data-src=".head-tab6">Hải sản</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tabs-content container">
        <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix wrap_item_list row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/bun-bo-ha-noi" title="Bún bò hà nội">Bún bò hà nội</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7913086"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu; Bún, thịt bò, rau sống,...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">50.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/com-tam-cali" title="Cơm tấm Cali">Cơm tấm Cali</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912960"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: cơm tấm, thịt lợn quay,...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">30.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/dau-phu-ran-gion" title="Đậu phụ rán giòn">Đậu phụ rán giòn</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7909139"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Đậu rán là món ăn quen thuộc nhà nào...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">15.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/suon-than-be-uc" title="Sườn thăn bê úc">Sườn thăn bê úc</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7908710"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Sườn thăn bê là phần thịt mềm, có nh...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">899.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center">
                        <a href="mon-khai-vi.html" title="Xem thêm món" class="view_more_cls">Xem thêm món</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tabb2" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix wrap_item_list row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/sushi-rau-song-thap-cam" title="Sushi rau sống thập cẩm">Sushi rau sống thập cẩm</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7911826"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Rau sống các loại 
                                        400g cơm nóng ...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">99.000₫</span>
                                        <span class="price product-price-old">
                                        199.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/sushi-tom-thap-cam" title="Sushi tôm thập cẩm">Sushi tôm thập cẩm</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7911785"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu:  
                                        400g cơm nóng (cơm...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">199.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/sushi-hai-san-dong-hop" title="Sushi hải sản đóng hộp">Sushi hải sản đóng hộp</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7911712"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu:  
                                        400g cơm nóng (cơm...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">220.000₫</span>
                                        <span class="price product-price-old">
                                        299.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/sushi-tom-hum-dau-xanh" title="Sushi tôm hùm đậu xanh">Sushi tôm hùm đậu xanh</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7911668"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Tôm hùm loại to 1 con 
                                        ...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">140.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/sushi-thap-cam-hao-hang" title="Sushi thập cẩm hảo hạng">Sushi thập cẩm hảo hạng</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7909169"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: 400g cơm nóng (cơm làm ...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">240.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center">
                        <a href="mon-sushi.html" title="Xem thêm món" class="view_more_cls">Xem thêm món</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tabb3" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix wrap_item_list row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/trung-trang-op-la" title="Trứng tráng ốp la">Trứng tráng ốp la</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7913126"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: trứng, rau sống các loạ...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">30.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/lon-quay-dac-biet" title="Lợn quay đặc biệt">Lợn quay đặc biệt</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912561"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Lợn quay tẩm gia vị, ra...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">199.000₫</span>
                                        <span class="price product-price-old">
                                        299.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/tom-chien-tam-bot" title="Tôm chiên tẩm bột">Tôm chiên tẩm bột</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912070"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu:  
                                        Tôm sú tươi 3...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">90.000₫</span>
                                        <span class="price product-price-old">
                                        99.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/ca-mu-sot-me" title="Cá mú sốt me">Cá mú sốt me</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7911990"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu:  
                                        Cá mú: 1 con 1Kg 
                                        ...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">240.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/nem-ran-gion-rum" title="Ném rán giòn rụm">Ném rán giòn rụm</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7909078"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu :  
                                        Thịt heo xay – 250...</span>
                                    </div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">70.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center">
                        <a href="mon-chien.html" title="Xem thêm món" class="view_more_cls">Xem thêm món</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tabb4" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix wrap_item_list row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/cha-tom-boc-sa-nuong" title="chả tôm bọc sả nướng">chả tôm bọc sả nướng</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7913025"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Tôm, xả, dưa chuột, tươ...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">50.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/thit-nuong-xa-tron-bun" title="Thịt nướng xả trộn bún">Thịt nướng xả trộn bún</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912870"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Thịt lợn nướng, bún, gi...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">240.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/xien-nuong-dong-gia-10k" title="Xiên nướng đồng giá 10k">Xiên nướng đồng giá 10k</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912690"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Thịt lợn, bò, dê, cùng ...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">10.000₫</span>
                                        <span class="price product-price-old">
                                        15.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/suon-than-be-uc" title="Sườn thăn bê úc">Sườn thăn bê úc</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7908710"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Sườn thăn bê là phần thịt mềm, có nh...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">899.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center">
                        <a href="mon-nuong.html" title="Xem thêm món" class="view_more_cls">Xem thêm món</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tabb5" class="content-tab content-tab-proindex" style="display:none">
            <div class="clearfix wrap_item_list row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/lau-thap-cam-cho-2-nguoi" title="Lẩu thập cẩm cho 2 người">Lẩu thập cẩm cho 2 người</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912793"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu : Tôm, sú, rau củ quả cá...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">
                                        <span class="price product-price">299.000₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="wrp_item_small">
                        <div class="product-box product-list-small">
                            <div class="product-info a-left">
                                <div class="info_left a-left">
                                    <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/set-lau-hai-san-cho-2-nguoi" title="Set lẩu hải sản cho 2 người">Set lẩu hải sản cho 2 người</a></h3>
                                    <div class="reviews-product-list-small hidden">
                                        <div class="bizweb-product-reviews-badge" data-id="7912480"></div>
                                    </div>
                                    <div class="des_product_item"><span class="text1line"> Nguyên liệu: Thịt bò, bạch tuộc, rau...</span></div>
                                </div>
                                <div class="info_right a-right">
                                    <div class="price-box clearfix">			
                                        <span class="price product-price">299.000₫</span>
                                        <span class="price product-price-old">
                                        330.000₫			
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center">
                        <a href="lau-sup.html" title="Xem thêm món" class="view_more_cls">Xem thêm món</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tabb6" class="content-tab content-tab-proindex" style="display:none">
        <div class="clearfix wrap_item_list row">
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
            <div class="wrp_item_small">
                <div class="product-box product-list-small">
                    <div class="product-info a-left">
                        <div class="info_left a-left">
                            <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/muc-hap-nuoc-dua" title="Mực hấp nước dừa">Mực hấp nước dừa</a></h3>
                            <div class="reviews-product-list-small hidden">
                                <div class="bizweb-product-reviews-badge" data-id="7908642"></div>
                            </div>
                            <div class="des_product_item"><span class="text1line"> Nguyên liệu: 500 gr mực tươi 
                                4 cây...</span>
                            </div>
                        </div>
                        <div class="info_right a-right">
                            <div class="price-box clearfix">
                                <span class="price product-price">180.000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
            <div class="wrp_item_small">
                <div class="product-box product-list-small">
                    <div class="product-info a-left">
                        <div class="info_left a-left">
                            <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/tom-hap-nuoc-dua" title="Tôm hấp nước dừa">Tôm hấp nước dừa</a></h3>
                            <div class="reviews-product-list-small hidden">
                                <div class="bizweb-product-reviews-badge" data-id="7908573"></div>
                            </div>
                            <div class="des_product_item"><span class="text1line"> Nguyên liệu : Tôm 500g (mua loại 100...</span></div>
                        </div>
                        <div class="info_right a-right">
                            <div class="price-box clearfix">
                                <span class="price product-price">199.000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
            <div class="wrp_item_small">
                <div class="product-box product-list-small">
                    <div class="product-info a-left">
                        <div class="info_left a-left">
                            <h3 class="product-name"><a class="text1line" href="https://pasteur.bizwebvietnam.net/cua-hap-bia-gion-tuoi" title="Cua hấp bia giòn tươi">Cua hấp bia giòn tươi</a></h3>
                            <div class="reviews-product-list-small hidden">
                                <div class="bizweb-product-reviews-badge" data-id="7908415"></div>
                            </div>
                            <div class="des_product_item"><span class="text1line"> Nguyên liệu: Cua biển. 
                                Bia (lon). ...</span>
                            </div>
                        </div>
                        <div class="info_right a-right">
                            <div class="price-box clearfix">
                                <span class="price product-price">90.000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="awe-section-7">
    <section class="section_guest_blog section_open_store">
        <div class="container">
            <div class="row">
                <div class="wrap_module_guest_blog">
                    <div class="col-magrin-bottom col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="wrap_modul_open">
                            <div class="wrap_border">
                                <div class="title_open">
                                    <span class="mini_title">Thời gian</span>
                                    <p class="large_title">Mở cửa</p>
                                </div>
                                <div class="time_">
                                    <p>THỨ 2 - THỨ 7</p>
                                    <span>Từ 7:00 - 11:00 (Bữa sáng)</span>
                                    <span>11:00 - 23:00 (Bữa tối)</span>
                                </div>
                                <div class="time_">
                                    <p>THỨ 7 - Chủ nhật</p>
                                    <span>Từ 8:00 - 13:00 (Bữa sáng)</span>
                                    <span>13:00 - 23:00 (Bữa tối)</span>
                                </div>
                                <div class="phone_">
                                    <a title ="Liên hệ ngay" href="tel:0912775468">0912775468</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-margin col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="title_">
                            <h2 class="title_lagre"><a href="#" title="Tin tức nhà hàng">Tin tức nhà hàng</a></h2>
                        </div>
                        <div class="blog_">
                            <div class="wrap_blog">
                                <article class="blog_item_module">
                                    <div class="blog_item_thumbnail" onclick="location.href='https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat';">
                                        <div class="img1">
                                            <a href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat" title="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">
                                            <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563" alt="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="blog-item-name"><a class="text1line" title="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật" href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat">Mách bạn cách chọn nước chấm chu...</a></h3>
                                    <span class="post-time">
                                    14/08/2017
                                    </span>
                                    <p class="blog-item-summary text3line"> Cũng giống như thói quen trong mỗi bữa ăn của người Việt, bát nước chấm cũng không thể nào thiếu trong ẩm thực Nhật Bản. Tuy nhiên, đa dạng hơn...</p>
                                    <div class="ft_blog">
                                        <a class="more_ a-left" href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat" title="Đọc tiếp Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">Đọc tiếp</a>
                                        <span class="postby_ a-right">Viết bởi: <span class="author">Đào Quý Thương</span></span>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-margin col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="title_">
                            <h2 class="title_lagre"><a href="#" title="Tin tức video">Tin tức video</a></h2>
                        </div>
                        <div class="blog_">
                            <div class="wrap_blog blog_videos">
                                <article class="blog_item_module">
                                    <div class="blog_item_thumbnail" onclick="location.href='https://pasteur.bizwebvietnam.net/thuyen-sushi-dep-mat-thu-hut-moi-anh-nhin-ngot-ngao-khi-thuong-thuc';">
                                        <div class="img1 _hasvideo">
                                            <span class="play_icon"><i class="fa fa-play"></i></span>
                                            <a href="https://pasteur.bizwebvietnam.net/thuyen-sushi-dep-mat-thu-hut-moi-anh-nhin-ngot-ngao-khi-thuong-thuc" title="Thuyền sushi đẹp mắt thu hút mọi ánh nhìn ngọt ngào khi thưởng thức">
                                            <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/img-3384-tatami-700x400.jpg?v=1502674998133" alt="Thuyền sushi đẹp mắt thu hút mọi ánh nhìn ngọt ngào khi thưởng thức">
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="blog-item-name"><a class="text1line" title="Thuyền sushi đẹp mắt thu hút mọi ánh nhìn ngọt ngào khi thưởng thức" href="https://pasteur.bizwebvietnam.net/thuyen-sushi-dep-mat-thu-hut-moi-anh-nhin-ngot-ngao-khi-thuong-thuc">Thuyền sushi đẹp mắt thu hút mọi ánh ...</a></h3>
                                    <span class="post-time">
                                    14/08/2017
                                    </span>
                                </article>
                                <article class="blog_item_module">
                                    <div class="blog_item_thumbnail" onclick="location.href='https://pasteur.bizwebvietnam.net/com-tam-suon-non-suc-hap-dan-khong-the-choi-tu';">
                                        <div class="img1 _hasvideo">
                                            <span class="play_icon"><i class="fa fa-play"></i></span>
                                            <a href="https://pasteur.bizwebvietnam.net/com-tam-suon-non-suc-hap-dan-khong-the-choi-tu" title="Cơm tấm sườn non sức hấp dẫn không thể chối từ">
                                            <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/cd956b9f815c27ab7720cba5b73a861a.jpg?v=1502512804953" alt="Cơm tấm sườn non sức hấp dẫn không thể chối từ">
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="blog-item-name"><a class="text1line" title="Cơm tấm sườn non sức hấp dẫn không thể chối từ" href="https://pasteur.bizwebvietnam.net/com-tam-suon-non-suc-hap-dan-khong-the-choi-tu">Cơm tấm sườn non sức hấp dẫn không th...</a></h3>
                                    <span class="post-time">
                                    12/08/2017
                                    </span>
                                </article>
                                <article class="blog_item_module">
                                    <div class="blog_item_thumbnail" onclick="location.href='https://pasteur.bizwebvietnam.net/bun-long-heo-cam-xuc-kho-ta-voi-moi-nguoi-thuong-thuc';">
                                        <div class="img1 _hasvideo">
                                            <span class="play_icon"><i class="fa fa-play"></i></span>
                                            <a href="https://pasteur.bizwebvietnam.net/bun-long-heo-cam-xuc-kho-ta-voi-moi-nguoi-thuong-thuc" title="Bún lòng heo cảm xúc khó tả với mỗi người thưởng thức">
                                            <img src="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/am-thuc-ha-noi-a7.jpg?v=1502512305550" alt="Bún lòng heo cảm xúc khó tả với mỗi người thưởng thức">
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="blog-item-name"><a class="text1line" title="Bún lòng heo cảm xúc khó tả với mỗi người thưởng thức" href="https://pasteur.bizwebvietnam.net/bun-long-heo-cam-xuc-kho-ta-voi-moi-nguoi-thuong-thuc">Bún lòng heo cảm xúc khó tả với mỗi n...</a></h3>
                                    <span class="post-time">
                                    12/08/2017
                                    </span>
                                </article>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<div class="bizweb-product-reviews-module"></div>
@endsection
