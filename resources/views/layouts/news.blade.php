@extends('layouts.master')
@section('title','Tin tức')
@section('content')
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="https://pasteur.bizwebvietnam.net/" ><span itemprop="title">{{ trans('master.home') }}</span></a>						
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li><strong itemprop="title">{{ trans('master.news') }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container  margin-bottom-50">
    <div class="row">
        <section class="right-content col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
            <div class="wrap_blog_main">
                <div class="title_page_h1">
                    <h1>{{ trans('master.news') }}</h1>
                    <div class="page_description">
                        <p class="des_cript"></p>
                    </div>
                </div>
                <section class="list-blogs blog-main">
                    <div class="row">
                        <div class="blog_item_main">
                            <article class="blog-item blog-item-grid">
                                <div class="blog-item-thumbnail img1 col-lg-6 col-md-6 col-sm-6 col-xs-12" onclick="window.location.href='https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat';">
                                    <a href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/food.jpg?v=1502675599563">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/food.jpg?v=1502675599563" style="max-width:100%;" class="img-responsive" alt="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">
                                        </picture>
                                    </a>
                                </div>
                                <div class="info_blog col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat" title="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật</a></h3>
                                    <div class="post-time-blog">
                                        14/08/2017
                                    </div>
                                    <div class="blog-item-summary ">
                                        <p class="text3line"> Cũng giống như thói quen trong mỗi bữa ăn của người Việt, bát nước chấm cũng không thể nào thiếu trong ẩm thực Nhật Bản. Tuy nhiên, đa dạng hơn...</p>
                                    </div>
                                    <div class="ft_blog">
                                        <a class="more_ a-left" href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat" title="Đọc tiếp Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">Đọc tiếp</a>
                                        <span class="postby_ a-right">Viết bởi: <span class="author">Đào Quý Thương</span></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="blog_item_main">
                            <article class="blog-item blog-item-grid">
                                <div class="blog-item-thumbnail img1 col-lg-6 col-md-6 col-sm-6 col-xs-12" onclick="window.location.href='https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha';">
                                    <a href="https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370" style="max-width:100%;" class="img-responsive" alt="4 món nướng thơm nức mũi cuối tuần cho mọi nhà">
                                        </picture>
                                    </a>
                                </div>
                                <div class="info_blog col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha" title="4 món nướng thơm nức mũi cuối tuần cho mọi nhà">4 món nướng thơm nức mũi cuối tuần cho mọi nhà</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                    <div class="blog-item-summary ">
                                        <p class="text3line">   
                                            Chỉ cần ngửi mùi thơm của các món nướng này thôi đã không thể nào cưỡng lại được sự hấp dẫn của chúng. 
                                            Với các món nướng nên lựa thịt có c...
                                        </p>
                                    </div>
                                    <div class="ft_blog">
                                        <a class="more_ a-left" href="https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha" title="Đọc tiếp 4 món nướng thơm nức mũi cuối tuần cho mọi nhà">Đọc tiếp</a>
                                        <span class="postby_ a-right">Viết bởi: <span class="author">Đào Quý Thương</span></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="blog_item_main">
                            <article class="blog-item blog-item-grid">
                                <div class="blog-item-thumbnail img1 col-lg-6 col-md-6 col-sm-6 col-xs-12" onclick="window.location.href='https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang';">
                                    <a href="https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/1-9535.jpg?v=1502511050593" style="max-width:100%;" class="img-responsive" alt="Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng">
                                        </picture>
                                    </a>
                                </div>
                                <div class="info_blog col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang" title="Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng">Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                    <div class="blog-item-summary ">
                                        <p class="text3line"> Nếu đã một lần nếm thử salad rong biển trứng cua tại nhà hàng Chen, chắc chắn bạn sẽ không thể nào quên được hương vị “lạ” của nó. Đây là một món ...</p>
                                    </div>
                                    <div class="ft_blog">
                                        <a class="more_ a-left" href="https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang" title="Đọc tiếp Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng">Đọc tiếp</a>
                                        <span class="postby_ a-right">Viết bởi: <span class="author">Đào Quý Thương</span></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="blog_item_main">
                            <article class="blog-item blog-item-grid">
                                <div class="blog-item-thumbnail img1 col-lg-6 col-md-6 col-sm-6 col-xs-12" onclick="window.location.href='https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong';">
                                    <a href="https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/large/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623" style="max-width:100%;" class="img-responsive" alt="Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng">
                                        </picture>
                                    </a>
                                </div>
                                <div class="info_blog col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong" title="Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng">Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                    <div class="blog-item-summary ">
                                        <p class="text3line"> Đồ nướng là món ăn yêu thích của rất nhiều thực khách ngày đông. Tuy vậy, không thể phủ nhận những nguy cơ không tốt cho sức khỏe mà nó đem lại nh...</p>
                                    </div>
                                    <div class="ft_blog">
                                        <a class="more_ a-left" href="https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong" title="Đọc tiếp Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng">Đọc tiếp</a>
                                        <span class="postby_ a-right">Viết bởi: <span class="author">Đào Quý Thương</span></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="text-xs-right col-lg-6 col-sm-6 col-xs-12 col-md-6">
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <aside class="left left-content col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <aside class="aside-item collection-category cate_blog no-padding">
                <div class="title_module">
                    <h2><span>Danh mục tin</span></h2>
                </div>
                <div class="aside-content aside-cate-link-cls aside-cate-blog">
                    <nav class="nav-category navbar-toggleable-md">
                        <ul class="nav-ul nav navbar-pills">
                            <li class="nav-item lv_1 ">
                                <a class="nav-link" href="https://pasteur.bizwebvietnam.net/tin-tuc-video">Tin tức video 
                                <span class="count_blog">(3)</span>
                                </a>
                            </li>
                            <li class="nav-item lv_1 ">
                                <a class="nav-link" href="https://pasteur.bizwebvietnam.net/meo-vat">Mẹo vặt 
                                <span class="count_blog">(1)</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <span class="border-das-sider"></span>
                </div>
            </aside>
            <div class="aside-item no-padding recent-blog">
                <div>
                    <div class="title_module">
                        <h2><a href="tin-tuc.html" title="Tin tức nổi bật">Tin tức nổi bật</a></h2>
                    </div>
                    <div class="list-blogs">
                        <div class="blog_list_item">
                            <article class="blog-item blog-item-list ">
                                <div class="blog-item-thumbnail img1" onclick="window.location.href='https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat';">
                                    <a href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/food.jpg?v=1502675599563">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/food.jpg?v=1502675599563">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/food.jpg?v=1502675599563" style="max-width:100%;" class="img-responsive" alt="Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật">
                                        </picture>
                                    </a>
                                </div>
                                <div class="ct_list_item">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/mach-ban-cach-chon-nuoc-cham-chuan-gu-cho-mon-nhat">Mách bạn cách chọn nước chấm chuẩn gu cho món Nhật</a></h3>
                                    <div class="post-time-blog">
                                        14/08/2017
                                    </div>
                                </div>
                            </article>
                            <article class="blog-item blog-item-list ">
                                <div class="blog-item-thumbnail img1" onclick="window.location.href='https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha';">
                                    <a href="https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/fish-steak-with-onions-1.jpg?v=1502511755370" style="max-width:100%;" class="img-responsive" alt="4 món nướng thơm nức mũi cuối tuần cho mọi nhà">
                                        </picture>
                                    </a>
                                </div>
                                <div class="ct_list_item">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/4-mon-nuong-thom-nuc-mui-cuoi-tuan-cho-moi-nha">4 món nướng thơm nức mũi cuối tuần cho mọi nhà</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                </div>
                            </article>
                            <article class="blog-item blog-item-list ">
                                <div class="blog-item-thumbnail img1" onclick="window.location.href='https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang';">
                                    <a href="https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/1-9535.jpg?v=1502511050593">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/1-9535.jpg?v=1502511050593" style="max-width:100%;" class="img-responsive" alt="Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng">
                                        </picture>
                                    </a>
                                </div>
                                <div class="ct_list_item">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/lam-salad-rong-bien-trung-cua-ngon-me-li-y-het-nha-hang">Làm salad rong biển trứng cua ngon mê li y hệt nhà hàng</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                </div>
                            </article>
                            <article class="blog-item blog-item-list ">
                                <div class="blog-item-thumbnail img1" onclick="window.location.href='https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong';">
                                    <a href="https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 481px) and (max-width: 767px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <source media="(min-width: 1200px)" srcset="http://bizweb.dktcdn.net/thumb/compact/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623">
                                            <img src="http://bizweb.dktcdn.net/100/244/304/articles/foody-mobile-chma-jpg-760-636167051736788636.jpg?v=1502510680623" style="max-width:100%;" class="img-responsive" alt="Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng">
                                        </picture>
                                    </a>
                                </div>
                                <div class="ct_list_item">
                                    <h3 class="blog-item-name"><a class="text2line" href="https://pasteur.bizwebvietnam.net/meo-hay-giam-beo-chong-ung-thu-khi-an-lau-nuong">Mẹo hay giảm béo, chống ung thư khi ăn lẩu nướng</a></h3>
                                    <div class="post-time-blog">
                                        12/08/2017
                                    </div>
                                </div>
                            </article>
                        </div>
                        <a href="tin-tuc.html" title="Xem thêm"><i class="fa fa-caret-right"></i> Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="aside-item no-padding recent-blog">
                <div>
                    <div class="title_module">
                        <h2><span>Tags</span></h2>
                    </div>
                    <div class="list-tags">
                        <a title="mẹo" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/meo">mẹo</a>,
                        <a title="video" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/video">video</a>,
                        <a title="sushi" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/sushi">sushi</a>,
                        <a title="salad" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/salad">salad</a>,
                        <a title="rong biển" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/rong-bien">rong biển</a>,
                        <a title="bí quyết" href="https://pasteur.bizwebvietnam.net/blogs/all/tagged/bi-quyet">bí quyết</a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
<div class="ab-module-article-mostview"></div>
<link href='http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/bpr-products-module.css?1509501415605' rel='stylesheet' type='text/css' />
<div class="bizweb-product-reviews-module"></div>
@endsection
