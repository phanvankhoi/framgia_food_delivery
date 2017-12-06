@extends('layouts.master')
@section('title', 'Category Page')
@section('content')
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="{{ route('index') }}" ><span itemprop="title">{{ trans('master.home') }}</span></a>						
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li><strong ><span itemprop="title"> {{ trans('master.allProduct') }}</span></strong></li>
                </ul>
                @if (session()->has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
            </div>
        </div>
    </div>
</section>
<div class="container margin-bottom-15">
    <div class="wrp_border_collection">
        <div class="row">
            <section class="main_container collection collection_container col-lg-8 col-md-8 col-sm-12 col-lg-push-4 col-md-push-4">
                <div class="title_page_cls">
                    <h1 class="title-head-page hidden-xs title_page_cls margin-top-0">
                        {{ trans('master.allProduct') }}
                    </h1>
                    <div class="text-sm-left count_text">	
                        <span class="count_cls ">({{ trans('master.count') }} <span class="ttt">{{ $count }}</span> {{ trans('master.product') }})</span>
                    </div>
                </div>
                <div class="category-products products">
                    <div class="sortPagiBar">
                        <div class="srt">
                            <div class="wr_sort col-sm-12 col-xs-12">
                                <div class="text-sm-right">
                                    <div class="sortPagiBar text-sm-right">
                                        <div id="sort-by">
                                            <label class="left hidden-xs">{{ trans('master.sort') }}: </label>
                                            <div class="border_sort">
                                                <select onChange="sortby(this.value)">
                                                    <option class="valued" value="default">{{ trans('master.default') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="products-view products-view-grid collection_reponsive">
                        <div class="row">
                        	@foreach ($paginate as $food)
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 product-grid-col" id="food-box">
                                    <div class="product-box grid_cls">
                                        <div class="product-thumbnail ">
                                            <a class="image_link " href="#" title="{{ $food->name }}">
                                            <img src="{{ $food->image }}" alt="{{ $food->name }}">
                                            </a>
                                            <div class="product-action-grid clearfix">
                                                <form action="{{ route('addToCart', $food->id) }}" method="post" class="variants form-nut-grid" data-id="product-actions-7913126" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div>
                                                        <a href="{{ route('food', $food->id) }}" class="button_wh_40 btn_view right-to quick-view"><i class="fa fa-search-plus"></i></a>
                                                        <button class="button_wh_40 btn-cart add_to_cart" title="{{ trans('master.addToCart') }}" type="submit">
                                                        <span><i class="fa fa-cart-plus"></i></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info a-left">
                                            <h3 class="product-name"><a class="text1line" href="{{ route('food', $food->id) }}" title="{{ $food->name }}">{{ $food->name }}</a></h3>
                                            <div class="des_product_item">
                                            	<span class="text1line"> 
                                            		{{ str_limit($food->description, config('customer.product.description')) }}
                                                </span>
                                            </div>
                                            <div class="price-box clearfix">
                                                <span class="price product-price">{{ \App\Helpers\Helper::showPrice($food) }}{{ trans('master.unit') }}</span>
                                                @if ($food->discountFood->id != config('customer.product.no_discount')
                                                        && $food->discountFood->end_date 
                                                            >= \Illuminate\Support\Carbon::now())                                               
                                                    <span class="price product-price-old">{{ $food->price }}{{ trans('master.unit') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        {!! $paginate->links() !!}
                    </section>
                </div>
            </section>
            <aside class="dqdt-sidebar sidebar left left-content col-xs-12 col-lg-4 col-md-4 col-sm-12  col-lg-pull-8 col-md-pull-8">
                <aside class="aside-item collection-category">
                    <div class="title_module">
                        <h2><span>{{ trans('master.category') }}</span></h2>
                    </div>
                    <div class="aside-content aside-cate-link-cls">
                        <nav class="cate_padding nav-category navbar-toggleable-md">
                            <ul class="nav-ul nav navbar-pills">
                            	@foreach ($categories as $category)
                                    <li class="nav-item  lv1">
                                        <a class="nav-link" href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->name }}
                                        <em>({{ $category->foods->count() }})</em>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </aside>
                <div class="off_today off_today_collection hidden-sm hidden-xs">
                    <div class="title_module not_bg">
                        <h2><a href="{{ route('topFood') }}" title="{{ trans('master.special') }}">{{ trans('master.special') }}</a></h2>
                    </div>
                    <div class="sale_off_today">
                        <div class="not-dqowl wrp_list_product">
                        	@foreach ($top_foods as $top_food)
                                <div class="item_small">
                                    <div class="product-box product-list-small">
                                        <div class="product-info a-left">
                                            <div class="info_left a-left">
                                                <h3 class="product-name"><a class="text1line" href="{{ route('food', $top_food->id) }}" title="{{ $top_food->name }}">{{ $top_food->name }}</a></h3>
                                                <div class="des_product_item"><span class="text1line"> {{ str_limit($top_food->description, 50) }}</span></div>
                                            </div>
                                            <div class="info_right a-right">
                                                <div class="price-box clearfix">
                                                    <span class="price product-price">{{ \App\Helpers\Helper::showPrice($food) }}{{ trans('master.unit') }}</span>
                                                    @if ($food->discount_id != config('customer.product.no_discount'))
                                                    
                                                        <span class="price product-price-old">{{ $food->price }}{{ trans('master.unit') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
