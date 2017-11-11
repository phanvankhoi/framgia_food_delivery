@extends('layouts.master')
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
                    <li>
                        <a itemprop="url" href="https://pasteur.bizwebvietnam.net/mon-chien"><span itemprop="title">Món chiên</span></a>						
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li><strong><span itemprop="title">Trứng tráng ốp la</span></strong>
                    <li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product margin-top-30" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="//pasteur.bizwebvietnam.net/trung-trang-op-la">
    <meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-product">
                <div class="row">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="https://pasteur.bizwebvietnam.net/cart/add" method="post" class="form-inline">
                        <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col_large_full large-image">
                                    <a href="javascript:;" class="large_image_url checkurl">
                                    <img id="img_00" class="img-responsive" alt="Trứng tráng ốp la" src="http://bizweb.dktcdn.net/thumb/grande/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627"/>
                                    </a>
                                    <div class="hidden">
                                        <div class="item">
                                            <a href="http://bizweb.dktcdn.net/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627" data-image="//bizweb.dktcdn.net/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627" data-zoom-image="//bizweb.dktcdn.net/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hidden iwi">
                                        <a title="Yêu thích" class=" iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0" data-product="7913126" data-variant="12579870"><i class="fa fa-heart-o"></i></a>
                                        <a  title="Bỏ thích" class=" iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0" data-product="7913126" data-variant="12579870"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-pro">
                            <h1 class="title-product" itemprop="name">Trứng tráng ốp la</h1>
                            <div class="reviews_details_product">
                                <div class="bizweb-product-reviews-badge" data-id="7913126"></div>
                            </div>
                            <div class="price-box">
                                <div class="special-price"><span class="price product-price" >30.000₫</span> </div>
                                <!-- Giá -->
                            </div>
                            <div class="product-summary product_description margin-bottom-10">
                                <div class="rte description text3line">
                                    Nguyên liệu: trứng, rau sống các loại, tôm bỏ vỏ, giá đỗ.. 
                                </div>
                            </div>
                            <ul class="service_detais margin-bottom-10">
                                <li><span>Giao hàng miễn phí</span></li>
                                <li><span>Hỗ trợ tư vấn khách hàng mọi thời điểm</span></li>
                                <li><span>Nhận đặt món các sự kiện</span></li>
                                <li><span>Voucher giảm giá ưu đãi cực hấp dẫn</span></li>
                            </ul>
                            <div class="form-product col-lg-10 col-md-10 col-sm-12">
                                <div class="box-variant clearfix ">
                                    <input type="hidden" name="variantId" value="12579870" />
                                </div>
                                <div class="form-group form_button_details ">
                                    <div class="custom input_number_product custom-btn-number form-control">									
                                        <a class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</a>
                                        <input type="text" id="qtym" name="quantity" value="1" min="1" onkeyup="valid(this,'numbers')" onkeypress='validate(event)' class="form-control prd_quantity">
                                        <a class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</a>									
                                    </div>
                                    <button type="submit" class="btn btn-lg  btn-cart button_cart_buy_enable btn_buy add_to_cart" title="Cho vào giỏ hàng">
                                    <i class="fa fa-shopping-basket hidden"></i>&nbsp;&nbsp;<span>Thêm vào giỏ hàng</span>
                                    </button>									
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 no-padding">
                                <div class="social-sharing">
                                    <div class="social-normal" data-permalink="trung-trang-op-la.html">
                                        <label>Chia sẻ: </label>
                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://pasteur.bizwebvietnam.net/trung-trang-op-la" class="share-facebook" title="Chia sẻ lên Facebook">
                                        <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="http://twitter.com/share?text=Tr%e1%bb%a9ng%20tr%c3%a1ng%20%e1%bb%91p%20la&amp;url=https://pasteur.bizwebvietnam.net/trung-trang-op-la" class="share-twitter" class="share-twitter" title="Chia sẻ lên Twitter">
                                        <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="http://pinterest.com/pin/create/button/?url=https://pasteur.bizwebvietnam.net/trung-trang-op-la&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/244/304/products/banh-xeo-hai-san-nha-trang.jpg?v=1502697566627&amp;description=Tr%e1%bb%a9ng%20tr%c3%a1ng%20%e1%bb%91p%20la" class="share-pinterest" title="Chia sẻ lên pinterest">
                                        <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a target="_blank" href="http://plus.google.com/share?url=https://pasteur.bizwebvietnam.net/trung-trang-op-la" class="share-google" title="+1">
                                        <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="contacts ">
                                    <span class="block_phone"><span class="text">Gọi ngay:</span><a title="Gọi ngay: 18005974759" href="tel:18005974759">18005974759</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-12 margin-top-50 margin-bottom-10">
                        <!-- Nav tabs -->
                        <div class="product-tab e-tabs not-dqtab">
                            <span class="border-dashed-tab"></span>
                            <ul class="tabs tabs-title clearfix">
                                <li class="tab-link" data-tab="tab-1">
                                    <h3><span>Thông tin sản phẩm</span></h3>
                                </li>
                                <li class="tab-link" data-tab="tab-2">
                                    <h3><span>Tab tùy chỉnh</span></h3>
                                </li>
                                <li class="tab-link" data-tab="tab-3" id="tab-review">
                                    <h3><span>Đánh giá</span></h3>
                                </li>
                            </ul>
                            <div id="tab-1" class="tab-content">
                                <div class="rte">
                                    <p>Nguyên liệu: trứng, rau sống các loại, tôm bỏ vỏ, giá đỗ..</p>
                                    <p style="text-align: center;"><img data-thumb="large" original-height="600" original-width="800" src="http://bizweb.dktcdn.net/thumb/large/100/244/304/files/banh-xeo-hai-san-nha-trang.jpg?v=1502697484722" /></p>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="rte">
                                    Các nội dung Hướng dẫn mua hàng viết ở đây	
                                </div>
                            </div>
                            <div id="tab-3" class="tab-content tab-review-c">
                                <div class="rte">
                                    <div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="7913126">
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
@endsection
