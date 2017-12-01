@extends('layouts.master')
@section('content')
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/" ><span itemprop="title">{{ trans('master.home') }}</span></a>                     
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li>
                        <a itemprop="url" href="{{ route('category.show', $food->category->id) }}"><span itemprop="title">{{ $food->category->name }}</span></a>                     
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li><strong><span itemprop="title">{{ $food->name }}</span></strong>
                    <li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product margin-top-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-product">
                <div class="row">
                    <form enctype="multipart/form-data" id="add-to-cart-form" action="#" method="post" class="form-inline">
                        <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col_large_default col-lg-12 col-md-12 col-sm-12 col-xs-12 large-image">
                                    <a  href="#" class="large_image_url checkurl" data-rel="prettyPhoto[product-gallery]">
                                    <img id="img_01" class="img-responsive " alt="{{ $food->name }}" src="/{{ $food->image }}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-pro">
                            <h1 class="title-product" itemprop="name">{{ $food->name }}</h1>
                            <div class="reviews_details_product">
                                <div class="bizweb-product-reviews-badge" data-id="7912870"></div>
                            </div>
                            <div class="price-box">
                                <div class="special-price"><span class="price product-price" >{{ $food->price}}{{ trans('master.unit') }}</span> </div>
                            </div>
                            <div class="product-summary product_description margin-bottom-10">
                                <div class="rte description text3line">
                                    {{ $food->description }}
                                </div>
                            </div>
                            <div class="form-product col-lg-10 col-md-10 col-sm-12">
                                <div class="box-variant clearfix ">
                                    <input type="hidden" name="variantId" value="12579494" />
                                </div>
                                <div class="form-group form_button_details ">
                                    <div class="custom input_number_product custom-btn-number form-control">                                    
                                        <a class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</a>
                                        <input type="text" id="qtym" name="quantity" value="1" min="1" onkeyup="valid(this,'numbers')" onkeypress='validate(event)' class="form-control prd_quantity">
                                        <a class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</a>                                    
                                    </div>
                                    <button type="submit" class="btn btn-lg  btn-cart button_cart_buy_enable btn_buy add_to_cart" title="Cho vào giỏ hàng">
                                    <i class="fa fa-shopping-basket hidden"></i>&nbsp;&nbsp;<span>{{ trans('master.addToCart') }}</span>
                                    </button>                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-12 margin-top-50 margin-bottom-10">
                        <div class="product-tab e-tabs not-dqtab">
                            <span class="border-dashed-tab"></span>
                            <ul class="tabs tabs-title clearfix">
                                <li class="tab-link" data-tab="tab-1">
                                    <h3><span>{{ trans('master.home') }} </span></h3>
                                </li>
                                <li class="tab-link" data-tab="tab-2">
                                    <h3><span>{{ trans('master.home') }} </span></h3>
                                </li>
                                <li class="tab-link" data-tab="tab-3" id="tab-review">
                                    <h3><span>{{ trans('master.review') }}</span></h3>
                                </li>
                            </ul>
                            <div id="tab-1" class="tab-content">
                                <div class="rte">
                                    <p>{{ $food->description }}</p>
                                    <p style="text-align: center;"><img data-thumb="large" original-height="600" original-width="800" src="/{{ $food->image }}" /></p>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="rte">
                                    {{ trans('master.home') }}  
                                </div>
                            </div>
                            <div id="tab-3" class="tab-content tab-review-c">
                                <div class="rte">
                                    <div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="7912870">
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
{{ Html::script('js/food_detail.js') }}
@endsection
