<div class="header_top">
    <div class="topbar_wrap">
        <div class="container">
            <div class="row">
                <div class="head_content col-lg-12 col-md-12 col-sm-12">
                    <div class="menu-bar hidden-md hidden-lg">
                        <img src='http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/menu-bar.png?1509501415605' alt='menu bar' /> 
                    </div>
                    <div class="logo_top">                              
                        <a href="{{ route('index') }}" class="logo-wrapper ">                   
                        <img src="http://bizweb.dktcdn.net/100/244/304/themes/577104/assets/logo.png?1509501415605" alt="logo ">                    
                        </a>                                    
                    </div>
                    <div class="header_top_cart left">
                        <div class="search-cart">
                            <div class="use_register hidden-xs">
                                <span class="use_ico_register"><i class="icon-user icons"></i></span>
                                <ul class="login_and_register">
                                    @if (Auth::guest())
                                        <li class="hidden-sm hidden-xs"><a href="{{ route('getLogin') }}"  title="{{ trans('master.login') }}">{{ trans('master.login') }}</a></li>
                                        <li class="hidden-sm hidden-xs"><a href="{{ route('getRegister') }}"  title="{{ trans('master.register') }}">{{ trans('master.register')}}</a></li>
                                    @else
                                            <li class="hidden-sm hidden-xs"><a href="{{ route('home') }}">{{ trans('master.dashboard') }}</a></li> 
                                            <li class="hidden-sm hidden-xs"><a href="{{ route('showProfile') }}">{{ trans('master.profile') }}</a></li>                                        
                                            <li class="hidden-sm hidden-xs"><a href="{{ route('logout') }}">{{ trans('master.logout')}}</a></li>
                                    @endif    
                                </ul>
                            </div>
                            <div class="searching hidden-sm hidden-xs">
                                <div class="header_search search_form ">
                                    <form class="input-group search-bar search_form" action="" method="post" role="search" id="search-form">   
                                        {{ csrf_field() }}   
                                        <span class="input-group-btn">
                                        <button class="btn icon-fallback-text">
                                        <i class="icon-magnifier icons"></i>
                                        </button>
                                        </span>
                                        <input type="search" name="query" value="" placeholder="{{ trans('master.search') }} " class="input-group-field st-default-search-input search-text" autocomplete="off" id="search-input">            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_top_cart right">
                        <div class="search_cart">
                            <span class="phone_header hidden-sm hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i> <a title="CallMe">{{ trans('master.myTelephone') }}</a></span>
                            <div class="top-cart-contain f-right hidden-sm hidden-xs">
                                <div class="mini-cart text-xs-center">
                                    <div class="heading-cart">
                                        <a href="/cart">
                                        <span class="background_cart"><i class="icon-bag icons"></i></span>
                                        <span class="cart_num" id="cart-total"><span class="cartCount count_item_pr"></span></span>
                                        </a>
                                    </div>
                                    <div class="top-cart-content">
                                        <ul id="cart-sidebar" class="mini-products-list count_li">
                                            <li class="list-item">
                                                <ul></ul>
                                            </li>
                                            <li class="action">
                                                <ul>
                                                    <li class="li-fix-1">
                                                        <div class="top-subtotal">
                                                            {{ trans('master.total') }}
                                                            <span class="price"></span>
                                                        </div>
                                                    </li>
                                                    <li class="li-fix-2" style="">
                                                        <div class="actions">
                                                            <a href="https://pasteur.bizwebvietnam.net/cart" class="btn btn-primary">
                                                            <span>{{ trans('master.cart') }}</span>
                                                            </a>
                                                            <a href="https://pasteur.bizwebvietnam.net/checkout" class="btn btn-checkout btn-gray">
                                                            <span>{{ trans('master.checkout') }}</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
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
