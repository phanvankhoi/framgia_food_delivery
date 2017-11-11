@extends('layouts.master')
@section('title','Liên hệ')
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
                    <li><strong itemprop="title">{{ trans('master.contact') }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="margin-top-20 margin-bottom-40">
    <div class="container">
        <h1 class="title-head-login"><a href="#">{{ trans('master.contact') }}</a></h1>
        <div class="row">
            <div class="section_maps col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box-maps">
                    <div class="iFrameMap">
                        <div class="google-map">
                            <div id="contact_map" class="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="page-login page_cotact contact_main">
                    <h2 class="title-head-contact a-left"><span>{{ trans('master.detailInfo') }}</span></h2>
                    <div class="contact_">
                        <span class="f_title">{{ trans('master.address') }}: <span>{{ trans('master.myAddress') }}</span></span>
                        <span class="f_title">{{ trans('master.phone') }}: 
                        <a href="tel:1900 6750">{{ trans('master.myTelephone') }}</a>
                        </span>
                        <span class="f_title">{{trans('master.email') }}: <a href="#">{{ trans('master.myEmail') }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .google-map {width:100%;}
    .google-map .map {width:100%; height:400px; background:#dedede}
</style>
<script type="text/javascript">
    $(window).bind('load resize scroll', function() {
        var wDH = $(window).height();
        var heightContact = $('.contact_main').height();
        $('.google-map .map').css('min-height', heightContact - 25);
    });
    (jQuery)(document).ready(function($) {

        if ($('#contact_map').length) {
            $('#contact_map').gMap({
                zoom: 17,
                scrollwheel: false,
                maptype: 'TERRAIN',
                markers: [{
                    address: '442 Đội Cấn, Ba Đình, Hà Nôi',
                    html: '_address'
                }]
            });
        }
    });
</script>
@endsection
