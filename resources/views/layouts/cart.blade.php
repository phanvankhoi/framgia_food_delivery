@extends('layouts.master')
@section('title','Giỏ Hàng')
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
                    <li><strong itemprop="title">{{ trans('master.cart') }}</strong></li>
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
        </div>
    </div>
    <div class="cart-mobile hidden-md hidden-lg hidden-sm">
        <form action="/cart" method="post" novalidate="" class="margin-bottom-0">
            <div class="header-cart" style="background:#fff;">
                <div class="title-cart">
                    <h3>{{ trans('master.yourCart') }}</h3>
                </div>
            </div>
            <div class="header-cart-content" style="background:#fff;">
            </div>
        </form>
    </div>
</section>
@endsection
