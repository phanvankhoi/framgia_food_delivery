<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {{ Html::style('/bower/bootstrap/dist/css/bootstrap.min.css') }}
        {{ Html::style('bower/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('bower/nprogress/nprogress.css') }}
        {{ Html::style('bower/iCheck/skins/flat/green.css') }}
        {{ Html::style('bower/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}
        {{ Html::style('bower/jqvmap/dist/jqvmap.min.css') }}
        {{ Html::style('bower/bootstrap-daterangepicker/daterangepicker.css') }}
        {{ Html::style('bower/bower_food_delivery/build/css/custom.min.css') }}
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i><span>Framgia Food Delivery</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{ Url('images/img.jpg') }}" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>{{ trans('welcome') }},</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <br />
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>{{ trans('General') }}</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-tachometer"></i> {{ trans('Dashboard') }} <span class="fa fa-chevron-down"></span></a>
                                    </li>
                                    <li><a><i class="fa fa-bars"></i> {{ trans('Category') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">{{ trans('General Form') }}</a></li>
                                            <li><a href="form_advanced.html">{{ trans('Advanced Components') }}</a></li>
                                            <li><a href="form_validation.html">{{ trans('Form Validation') }}</a></li>
                                            <li><a href="form_wizards.html">{{ trans('Form Wizard') }}</a></li>
                                            <li><a href="form_upload.html">{{ trans('Form Upload') }}</a></li>
                                            <li><a href="form_buttons.html">{{ trans('Form Buttons') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-user-o"></i> {{ trans('User') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="general_elements.html">{{ trans('General Elements') }}</a></li>
                                            <li><a href="media_gallery.html">{{ trans('Media Gallery') }}</a></li>
                                            <li><a href="typography.html">{{ trans('Typography') }}</a></li>
                                            <li><a href="icons.html">{{ trans('Icons') }}</a></li>
                                            <li><a href="glyphicons.html">{{ trans('Glyphicons') }}</a></li>
                                            <li><a href="widgets.html">{{ trans('Widgets') }}</a></li>
                                            <li><a href="invoice.html">{{ trans('Invoice') }}</a></li>
                                            <li><a href="inbox.html">{{ trans('Inbox') }}</a></li>
                                            <li><a href="calendar.html">{{ trans('Calendar') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> {{ trans('Tables') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">{{ trans('Tables') }}</a></li>
                                            <li><a href="tables_dynamic.html">{{ trans('Table Dynamic') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> {{ trans('Order') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">{{ trans('Chart JS') }}</a></li>
                                            <li><a href="chartjs2.html">{{ trans('Chart JS2') }}</a></li>
                                            <li><a href="morisjs.html">{{ trans('Moris JS') }}</a></li>
                                            <li><a href="echarts.html">{{ trans('ECharts') }}</a></li>
                                            <li><a href="other_charts.html">{{ trans('Other Charts') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-clone"></i> {{ trans('Discount') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="fixed_sidebar.html">{{ trans('Fixed Sidebar') }}</a></li>
                                            <li><a href="fixed_footer.html">{{ trans('Fixed Footer') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-bug"></i> {{ trans('Additional Pages') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="e_commerce.html">{{ trans('E-commerce') }}</a></li>
                                            <li><a href="projects.html">{{ trans('Projects') }}</a></li>
                                            <li><a href="project_detail.html">{{ trans('Project Detail') }}</a></li>
                                            <li><a href="contacts.html">{{ trans('Contacts') }}</a></li>
                                            <li><a href="profile.html">{{ trans('Profile') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-sitemap"></i> {{ trans('Multilevel Menu') }} <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#level1_1">{{ trans('Level One') }}</a>
                                                <li><a>{{ trans('Level One') }}<span class="fa fa-chevron-down"></span></a>
                                                    <ul class="nav child_menu">
                                                        <li class="sub_menu"><a href="level2.html">{{ trans('Level Two') }}</a>
                                                        </li>
                                                        <li><a href="#level2_1">{{ trans('Level Two') }}</a>
                                                        </li>
                                                        <li><a href="#level2_2">{{ trans('Level Two') }}</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </li>
                                            <li><a href="#level1_2">{{ trans('Level One') }}</a>
                                            </li>
                                        </ul>
                                    </li>                  
                                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> {{ trans('Landing Page ') }} <span class="label label-success pull-right">{{ trans('Coming Soon') }}</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="English" href="#">Eng
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Vietnam" href="#">Vie
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ Url('images/img.jpg') }}" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> {{ trans('Profile') }}</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>{{ trans('Settings') }}</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">{{ trans('Help') }}</a></li>
                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> {{ trans('Log Out') }}</a></li>
                                    </ul>
                                </li>
                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                          <a>
                                                <span class="image"><img src="{{ Url('images/img.jpg') }}" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">{{ trans('3 mins ago') }}</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="{{ Url('images/img.jpg') }}" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">{{ trans('3 mins ago') }}</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="{{ Url('images/img.jpg') }}" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">{{ trans('3 mins ago') }}</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="{{ Url('images/img.jpg') }}" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">{{ trans('3 mins ago') }}</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>{{ trans('See All Alerts') }}</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">
                    @yield('content')                    
                </div>
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </div>
        {{ Html::script('bower/bower_food_delivery/vendors/jquery/dist/jquery.js') }}
        {{ Html::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
        {{ Html::script('bower/fastclick/lib/fastclick.js') }}
        {{ Html::script('bower/nprogress/nprogress.js') }}
        {{ Html::script('bower/bower_food_delivery/vendors/Chart.js/dist/Chart.min.js') }}
        {{ Html::script('bower/gauge.js/dist/gauge.min.js') }}
        {{ Html::script('bower/bootstrap-progressbar/bootstrap-progressbar.min.js') }}
        {{ Html::script('bower/iCheck/icheck.min.js') }}
        {{ Html::script('bower/bower_food_delivery/vendors/skycons/skycons.js') }}
        {{ Html::script('bower/Flot/jquery.flot.js') }}
        {{ Html::script('bower/Flot/jquery.flot.pie.js') }}
        {{ Html::script('bower/Flot/jquery.flot.time.js') }}
        {{ Html::script('bower/Flot/jquery.flot.stack.js') }}
        {{ Html::script('bower/Flot/jquery.flot.resize.js') }}
        {{ Html::script('bower/bower_food_delivery/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}
        {{ Html::script('bower/flot-spline/js/jquery.flot.spline.min.js') }}
        {{ Html::script('bower/flot.curvedlines/curvedLines.js') }}
        {{ Html::script('bower/DateJS/build/date.js') }}
        {{ Html::script('bower/jqvmap/dist/jquery.vmap.js') }}
        {{ Html::script('bower/jqvmap/dist/maps/jquery.vmap.world.js') }}
        {{ Html::script('bower/jqvmap/examples/js/jquery.vmap.sampledata.js') }}
        {{ Html::script('bower/moment/min/moment.min.js') }}
        {{ Html::script('bower/bootstrap-daterangepicker/daterangepicker.js') }}
        {{ Html::script('bower/bower_food_delivery/build/js/custom.min.js') }}
  </body>
</html>
