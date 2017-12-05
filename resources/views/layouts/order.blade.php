@extends('layouts.master')
@section('title','Đơn hàng')
@section('content')
<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/" ><span itemprop="title">{{ trans('master.home') }}</span></a>                        
                        <span><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                    </li>
                    <li><strong itemprop="title">{{ trans('master.orderInfo') }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="wrap_border col-lg-12">
            <span class="bordered"></span>
        </div>
    </div>
</div>
<section class="main-cart-page main-container col1-layout">
    <div class="main container hidden-xs">
        <h1 class="title-head-login"><a href="#">{{ trans('master.cart') }}</a></h1>
        <div class="col-main cart_desktop_page cart-page">
            <div class="cart page_cart cart_des_page hidden-xs-down">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-right cart_desktop ">
                    <div class="bg-scroll">
                        <div class="cart-thead">
                            <div style="width: 7%" class="a-center"><span>{{ trans('master.order') }}</span></div>
                            <div style="width: 10%" class="a-center">{{ trans('master.date') }}</div>
                            <div style="width: 40%" class="a-center">{{ trans('master.description') }}</div>
                            <div style="width: 20%" class="a-center"><span class="nobr">{{ trans('master.price') }}</span></div>
                            <div class="a-center" style="width: 20%"><span>{{ trans('master.status') }}</span></div>
                        </div>
                        <div class="cart-tbody">
                            @foreach($orders as $order)
                                <div class="item-cart ">
                                    <div style="width: 8%" class="a-center"><span class="item-price cart-price"> <span class="price pink">{{ ++$loop->index }}</span> </span></div>                                    
                                    <div style="width: 10%" class="a-center">
                                        <span class="item-price cart-price"> <span class="price pink">{{ $order->date }}</span> </span>
                                    </div>
                                    <div style="width: 40%" class="a-center"><span class="item-price cart-price"> <span class="price pink">{{ $order->description }}</span> </span></div>
                                    <div style="width: 20%" class="a-center"><span class="item-price"> <span class="price bold-price">{{ number_format($order->total_price) }}{{ trans('master.unit') }}</span></span></div>
                                    <div style="width: 20%" class="a-center">
                                        <span class="item-price cart-price"> 
                                            <span class="price pink">
                                                @if ($order->status == config('customer.order.pending'))
                                                    {{ trans('master.pending') }}
                                                @elseif ($order->status == config('customer.order.confirmed')))
                                                    {{ trans('master.confirm') }}
                                                @elseif ($order->status == config('customer.order.delivery')))
                                                    {{ trans('master.delivery') }}
                                                @else
                                                    {{ trans('master.done') }}
                                                @endif       
                                            </span> 
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
