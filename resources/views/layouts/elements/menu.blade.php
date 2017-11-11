<div class="site_menu">
    <div class="container">
        <div class="row">
            <nav class="hidden-sm hidden-xs col-md-12 col-lg-12">
                <div class="menu_hed">
                    <span class="content_null_left"><span class="content_"></span></span>
                    <ul id="nav" class="nav">
                        <li class="nav-item active"><a class="nav-link" href="{{route('index')}}">{{ trans('master.home') }}</a></li>
                        <li class="nav-item nav-items ">
                            <a href="https://pasteur.bizwebvietnam.net/collections/all" class="nav-link">{{ trans('master.menu') }} <i class="fa fa-caret-down" data-toggle="dropdown"></i></a>	
                            <ul class="dropdown-menu border-box">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="https://pasteur.bizwebvietnam.net/mon-khai-vi">{{ trans('master.foodName') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item "><a class="nav-link" href="/menu">{{ trans('master.special') }}</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{ route('contact') }}">{{ trans('master.contact') }}</a></li>
                        <li class="nav-item nav-items "><a href="/news" class="nav-link">{{ trans('master.news') }}</a></li>
                    </ul>
                    <span class="content_null_right"><span class="content_"></span></span>
                </div>
            </nav>
        </div>
    </div>
</div>
