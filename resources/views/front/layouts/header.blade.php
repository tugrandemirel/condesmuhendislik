

<!-- header-area start -->
<header class="theme-main-menu theme-menu-one black-bg">
    <div class="main-header-area">
        <div class="container header-custom-container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-4 col-6 d-none d-lg-inline-block">
                    <div class="logo-area">
                        <a class="front" href="{{ route('index') }}"><img src="{{ asset($_siteSetting->logo) }}" width="217"  alt="Condes Mühendislik"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 custom-border px-lg-0">
                    <div class="row align-items-center top__header__info pt-10 pb-10">
                        @if(!is_null($_siteSetting->phone) || !is_null($_siteSetting->address))
                            <div class="col-xl-9 col-lg-12">
                            <ul class="ps-lg-5 list-none header-info d-flex align-items-center justify-content-xl-start justify-content-lg-end justify-content-center">
                                @if(!is_null($_siteSetting->phone))
                                <li>
                                    <div class="header-info-box">
                                        <div class="icon">
                                            <img src="{{ asset('assets/front/img/icon/phone.svg') }}" alt="Phone">
                                        </div>
                                        <div class="text-content">
                                            <span>{{ $_siteSetting->phone_user }}</span>
                                            <h6><a href="tel:{{ $_siteSetting->phone }}">{{ $_siteSetting->phone }}</a></h6>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                    @if(!is_null($_siteSetting->phone_2))
                                        <li class="d-none d-lg-inline-block">
                                            <div class="header-info-box">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/front/img/icon/phone.svg') }}" alt="Phone">
                                                </div>
                                                <div class="text-content">
                                                    <span>{{ $_siteSetting->phone_user_2 }}</span>
                                                    <h6><a href="tel:{{ $_siteSetting->phone_2 }}">{{ $_siteSetting->phone_2 }}</a></h6>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @if(!is_null($_siteSetting->address))
                                    <li class="d-none d-sm-inline-block">
                                        <div class="header-info-box">
                                            <div class="icon">
                                                <img src="{{ asset('assets/front/img/icon/location.svg') }}" alt="Phone">
                                            </div>
                                            <div class="text-content">
                                                <span>Adres</span>
                                                <div class="right-language">
                                                    <div class="dropdown">
                                                        <a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $_siteSetting->address }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        @endif
                        @if($_socialMedia->count() > 0)
                            <div class="col-xl-3 d-none d-xl-inline-block text-lg-end">
                                <div class="social_media">
                                    @foreach($_socialMedia as $socialMedia)
                                        <a href="{{ $socialMedia->url }}" target="_blank">
                                            {!! $socialMedia->icon !!}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-10 col-md-12">
                            <div class="main-menu d-none d-lg-block ps-xl-5 ps-lg-3">
                                <nav id="mobile-menu">
                                    <ul class="menu-list ps-0">
                                        <li>
                                            <a href="{{ route('index') }}">ANASAYFA</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">HAKKIMIZDA</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service') }}">HİZMETLERİMİZ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog') }}">BLOGLARIMIZ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('reference') }}">REFERANSLARIMIZ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">İLETİŞİM</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-6 d-lg-none d-md-inline-block">
                            <div class="logo-area">
                                <a class="front" href="{{ route('index') }}"><img src="{{ asset($_siteSetting->logo) }}" alt="Header-logo" width="75"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-2 col-6">
                            <div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
                                <div class="hamburger-menu">
                                    <a class="round-menu" href="javascript:void(0);">
                                        <i class="far fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.theme-main-menu -->
</header>
<!-- header-area end -->

<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);">
            <i class="fas fa-times"></i>
        </a>
    </div>
    <!-- offset-sidebar start -->
    <div class="offset-sidebar">
        <div class="offset-widget offset-logo mb-30">
            <a href="{{ route('index') }}"><img width="50" src="{{ asset($_siteSetting->logo) }}" alt="Header-logo"></a>
        </div>
        <div class="mobile-menu"></div>


        <!-- <div class="login-btn text-center">
            <a class="ht_btn w-100" href="login.html">Login</a>
        </div> -->
    </div>
    <!-- offset-sidebar end -->

</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->
