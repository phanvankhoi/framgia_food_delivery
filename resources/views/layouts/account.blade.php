<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog wrap-modal-login" role="document">
        <div class="text-xs-center">
            <div class="fixheight" id="loginx">
                <div class="wrp_frm">
                    <div class="wrap_form">
                        <form accept-charset='UTF-8' action='https://pasteur.bizwebvietnam.net/account/login' id='customer_login' method='post'>
                            <input name='FormType' type='hidden' value='customer_login' />
                            <input name='utf8' type='hidden' value='true' />
                            <h5 class="title-modal">{{ trans('master.login') }}</h5>
                            <div class="form-signup clearfix from_ip">
                                <fieldset class="form-group">
                                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control form-control-lg" value="" placeholder="Nhập email" Required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" value="" placeholder="Nhập mật khẩu" Required>
                                </fieldset>
                                <fieldset class="form-group forget">
                                    <a href="#" onclick="showRecoverPasswordForm();return false;">{{ trans('master.forgetPassword') }} ?</a>
                                </fieldset>
                                <fieldset class="form-group">
                                    <button class="btn btn-bg btn-lg btn-style btn-style-active col-xs-12" type="submit">{{ trans('master.loginNow') }} <i class="fa fa-angle-right"></i></button>
                                </fieldset>
                                <div class="bt_login a-left">
                                    <span>{{ trans('master.hasNoAccount') }} <a href="#" class="btn-link-style" onclick="showRegisterForm();return false;">{{ trans('master.here') }}</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-signup background_image">
                    <a class="button_close_modal" href="javascript:;" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <div class="content_register">
                        <p class="title_x">{{trans('master.memberBenefit')}}</p>
                        <div class="des_x">
                            <span>{{ trans('master.review') }}</span>
                        </div>
                        <div class="button_right_">
                            <span><a href="#" class="btn-link-style" onclick="showRegisterForm();return false;">{{ trans('master.register') }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixheight" id="register" style="display:none;">
                <div class="wrp_frm_register">
                    <div class="wrap_form_register">
                        <h5 class="title-modal">{{ trans('master.register') }}</h5>
                        <form accept-charset='UTF-8' action='https://pasteur.bizwebvietnam.net/account/register' id='customer_register' method='post'>
                            <input name='FormType' type='hidden' value='customer_register' />
                            <input name='utf8' type='hidden' value='true' /> 
                            <div class="form-signup" >
                            </div>
                            <div class="form-signup clearfix from_ip">
                                <div class="cle">
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control form-control-lg retext" name="FirstName"   placeholder="Họ tên" required >
                                    </fieldset>
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control form-control-lg " name="email" id="email2" placeholder="Email" required >
                                    </fieldset>
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" class="form-control form-control-lg "  name="password" id="password2" minlength=6 maxlength=32 placeholder="Nhập mật khẩu" required  >
                                    </fieldset>
                                </div>
                                <fieldset class="form-group fr_gr_pd">
                                    <button type="submit" value="Đăng ký" class="btn btn-bg btn-lg mr_bt btn-style btn-style-active col-xs-12">{{ trans('master.register') }}</button>
                                </fieldset>
                                <div class="bt_login a-left">
                                    <span>{{ trans('master.hasAccount') }} <a href="#" class="btn-link-style" onclick="hideRegisterForm();return false;">{{ trans('master.here') }}</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-signup background_image_register">
                    <a class="button_close_modal" href="javascript:;" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <div class="content_register">
                        <p class="title_x">{{trans('master.memberBenefit')}}</p>
                        <div class="des_x">
                            <span>{{ trans('master.review') }}</span>
                        </div>
                        <div class="button_right_">
                            <span><a href="#" class="btn-link-style" onclick="showRegisterForm();return false;">{{ trans('master.login') }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="recover-password" style="display:none;" class="form-signup">
                <h2 class="title-head text-xs-center"><a href="#">{{ trans('master.recoverPassword') }}</a></h2>
                <p class="no_mr">{{ trans('master.recoverPasswordContent') }}</p>
                <form accept-charset='UTF-8' action='https://pasteur.bizwebvietnam.net/account/recover' id='recover_customer_password' method='post'>
                    <input name='FormType' type='hidden' value='recover_customer_password' />
                    <input name='utf8' type='hidden' value='true' />
                    <div class="form-signup" >
                    </div>
                    <div class="form-signup clearfix">
                        <fieldset class="form-group">
                            <input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email:" Required>
                        </fieldset>
                    </div>
                    <div class="action_bottom">
                        <input class="btn btn-bg btn-lg btn-style" type="submit" value="Gửi" />
                        <a href="#" class="btn btn-lg btn-style btn-style-active" style="margin-left:10px;" onclick="hideRecoverPasswordForm();return false;">{{ trans('master.cancel') }}</a>
                    </div>
                </form>
            </div>
            <!-- Javácript RecoverForm -->
            <script type="text/javascript">
                function showRecoverPasswordForm() {
                	document.getElementById('recover-password').style.display = 'block'; // Khoi phuc mat khau hien thi
                	document.getElementById('loginx').style.display='none'; //Dang nhap an
                	document.getElementById('register').style.display='none'; //dang ky an
                }
                
                function showRegisterForm() {
                	document.getElementById('register').style.display = 'block'; // dang ky hien thi
                	document.getElementById('loginx').style.display='none';
                	document.getElementById('recover-password').style.display='none';//khoi phuc mat khau an
                }
                
                function hideRegisterForm() {
                	document.getElementById('register').style.display = 'none'; // dang ky hien thi
                	document.getElementById('loginx').style.display='block';
                	document.getElementById('recover-password').style.display='none';//khoi phuc mat khau an
                }
                
                function hideRecoverPasswordForm() {
                	document.getElementById('recover-password').style.display = 'none'; //Khoi phuc mat khau an
                	document.getElementById('loginx').style.display = 'block'; //Dang nhap hien thi
                	document.getElementById('register').style.display='none';
                }
                
                function dangnhap() {
                	document.getElementById('recover-password').style.display = 'none'; // Khoi phuc mat khau hien thi
                	document.getElementById('loginx').style.display='block'; //Dang nhap hien thi
                	document.getElementById('register').style.display='none';
                }
                
                if (window.location.hash == '#recover') { showRecoverPasswordForm() }
            </script>
        </div>
    </div>
</div>
<!--Dang ky -->
<div class="modal fade" id="dangky" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog wrap-modal-login" role="document">
        <div class="text-xs-center">
            <div class="fixheight" id="login">
                <div class="wrp_frm_register">
                    <div class="wrap_form_register">
                        <h5 class="title-modal">{{ trans('master.register') }}</h5>
                        <form accept-charset='UTF-8' action='https://pasteur.bizwebvietnam.net/account/register' id='customer_register' method='post'>
                            <input name='FormType' type='hidden' value='customer_register' />
                            <input name='utf8' type='hidden' value='true' /> 
                            <div class="form-signup" >
                            </div>
                            <div class="form-signup clearfix from_ip">
                                <div class="cle">
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control form-control-lg retext" id="input-field" name="firstName"  placeholder="Họ tên" required >
                                    </fieldset>
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control form-control-lg " name="email" id="email" placeholder="Email" required >
                                    </fieldset>
                                    <fieldset class="form-group fr_gr_pd col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" class="form-control form-control-lg "  name="password" id="password" minlength=6 maxlength=32 placeholder="Nhập mật khẩu" required  >
                                    </fieldset>
                                </div>
                                <fieldset class="form-group fr_gr_pd">
                                    <button type="submit" value="Đăng ký" class=" btn-bg btn btn-lg btn-style btn-style-active col-xs-12">{{ trans('master.register') }}</button>
                                </fieldset>
                                <div class="bt_login a-left">
                                    <span>{{ trans('master.hasAccount') }}<a href="#" class="btn-link-style" data-toggle="modal" data-target="#dangnhap" onclick="dangnhap2();return false;">{{ trans('master.here') }}</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-signup background_image_register">
                    <a class="button_close_modal" href="javascript:;" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <div class="content_register">
                        <p class="title_x">{{ trans('master.memberBenefit') }}</p>
                        <div class="des_x">
                            <span>{{ trans('master.review') }}</span>
                        </div>
                        <div class="button_right_">
                            <span><a href="https://pasteur.bizwebvietnam.net/account/login" class="btn-link-style">{{ trans('master.login') }}</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function dangnhap2() {
                	document.getElementById('dangky').style.display='none'; 
                	document.getElementById('dangnhap').style.display='block';
                	document.getElementById('dangky').classList.remove('in');
                	$('.modal-backdrop').removeClass('in').fadeOut();
                }
            </script>
        </div>
    </div>
</div>
