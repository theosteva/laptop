<!--====================  header area ====================-->
<div class="header-area header-area--default bg-dark">
    <!-- Header Bottom Wrap Start -->
    <header class="header-area header-sticky bg-dark">
        <div class="container-fluid container-fluid--cp-100">
            <div class="row align-items-center">
                <!-- Logo Area Start -->
                <div class="col-lg-3 col-6">
                    <div class="logo text-start">
                        <a href="{{route('home')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" style="height:40px"></a>
                    </div>
                </div>
                <!-- Logo Area End -->

                <!-- Navigation Menu Start -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="header__navigation d-none d-lg-block">
                        <nav class="navigation-menu">
                            <ul class="justify-content-center">
                                <li>
                                    <a href="{{route('home')}}" class="text-white"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="{{route('plp')}}" class="text-white"><span>Shop</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Navigation Menu End -->

                <!-- Header Right Side Start -->
                <div class="col-lg-3 col-6">
                    <div class="header-right-side text-end">
                        <div class="header-right-items d-none d-md-block">
                            <span class="phone-number font-lg-p text-white" title="Call us for fast delivery">
                                <a href="#cfd" class="text-white"><i class="icon-telephone"></i>&nbsp;&nbsp;<small></small></a>
                            </span>
                        </div>
                        
                        <div class="header-right-items d-none d-md-block">
                            <a href="#wishlist" class="header-cart">
                                <i class="icon-heart text-white"></i>
                                <span class="item-counter bg-danger">3</span>
                            </a>
                        </div>

                        <div class="header-right-items">
                            <a href="#minicart" class="header-cart">
                                <i class="icon-bag2 text-white"></i>
                                <span class="item-counter bg-danger">3</span>
                            </a>
                        </div>
                        
                        <div class="header-right-items d-none d-md-block">
                            @if(@$_COOKIE['ut'])
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                                        Hello, {{ucwords(substr($_COOKIE['ue'], 0, 3))}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#my-profile"><span>My Profile</span></a></li>
                                        <li><a href="#" id="logout-btn"><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            @else
                                <a href="#" data-bs-toggle="modal" data-bs-target="#authModal">
                                    <i class="icon-user text-white"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Header Right Side End -->
            </div>
        </div>
    </header>
    <!-- Header Bottom Wrap End -->
</div>
<!--====================  End of header area  ====================-->

@php
    // echo "<pre>";
    // print_r($_COOKIE);
    // echo "</pre>";
@endphp

<div class="header-login-register-wrapper modal fade" id="authModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-box-wrapper">
                <div class="helendo-tabs">
                    <ul class="nav" role="tablist">
                        <li class="tab__item nav-item active">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab">Login</a>
                        </li>
                        <li class="tab__item nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_list_07" role="tab">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content content-modal-box">
                    <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                        <form class="account-form-box" id="form-login">
                            <h6 class="mb-3">Login to your account</h6>
                            <b id="form-login-error" class="text-danger"></b>
                            <div class="single-input">
                                <input name="email" type="text" placeholder="Email" required>
                            </div>
                            <div class="single-input">
                                <input name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="checkbox-wrap mt-10">
                                <label class="label-for-checkbox inline mt-15">
                                    <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                                <a href="#" class="mt-10 text-color-primary">Lost your password?</a>
                            </div>
                            <div class="button-box mt-25">
                                <button type="submit" class="btn btn--full btn--black" id="form-login-btn">Log in</button>
                            </div>
                        </form>
                        <div id="form-login-loading" style="text-align:center;display:none">
                            <img src="{{asset('assets/images/bg/loading.gif')}}" style="width: 300px">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                        <form class="account-form-box" id="form-register">
                            <h6 class="mb-6">Register An Account</h6>
                            <b id="form-register-error" class="text-danger"></b>
                            <div class="single-input">
                                <input name="name" type="text" placeholder="Name" required>
                            </div>
                            <div class="single-input">
                                <input name="email" type="text" placeholder="Email Address" required>
                            </div>
                            <div class="single-input">
                                <input name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="single-input">
                                <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
                            </div>
                            <p class="mt-15">
                                Your personal data will be used to support your experience throughout this website, 
                                to manage access to your account, and for other purposes described in our 
                                <a href="#" class="text-color-primary" target="_blank">privacy policy</a>.
                            </p>
                            <div class="button-box mt-25">
                                <button type="submit" class="btn btn--full btn--black" id="form-register-btn">Register</button>
                            </div>
                        </form>
                        <div id="form-register-loading" style="text-align:center;display:none">
                            <img src="{{asset('assets/images/bg/loading.gif')}}" style="width: 300px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
