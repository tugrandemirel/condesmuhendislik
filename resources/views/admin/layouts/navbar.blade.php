<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="pro-user-name ms-1">
                    {{ auth()->user()->name }}
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Hoşgeldin !</h6>
                </div>

                             <div class="dropdown-divider"></div>

                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('admin.home') }}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                            </span>
            <span class="logo-lg">
                                <img src="{{ asset('assets/admin/images/logo-light.png') }}" alt="" height="16">
                            </span>
        </a>
        <a href="{{ route('admin.home') }}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" height="22">
                            </span>
            <span class="logo-lg">
                                <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="16">
                            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">Yönetim Paneli</h4>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">


                    <!-- item-->

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <ul class="list-inline">

                <li class="list-inline-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">İŞLEMLER</li>

                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Anasayfa </span>
                    </a>
                </li>

                <li class="menu-title mt-2">BLOGLAR VE HİZMETLER</li>
                <li>
                    <a href="#email" data-bs-toggle="collapse">
                        <i class="mdi mdi-file-document-edit-outline"></i>
                        <span> Bloglar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="email">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.blog.index') }}">Bloglar</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.create') }}">Yeni Blog Oluştur</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#service" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-outline"></i>
                        <span> Hizmetler </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="service">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.service.index') }}">Hizmetler</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.service.create') }}">Yeni Hizmet Oluştur</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">KULLANICI İLETİŞİM </li>


                <li>
                    <a href="{{ route('admin.contact.index') }}">
                        <i class="mdi mdi-message"></i>
                        <span> Mesajlar </span>
                    </a>
                </li>


                <li class="menu-title mt-2">SİTE AYARLARI</li>
                <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Ayarlar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">

                            <li>
                                <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                    Görsel Ayarları <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.slider.index') }}">Slider</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('admin.site_setting.index') }}">Site Ayarları</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.seo.index') }}">SEO Ayarları</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.social_media.index') }}">Sosyal Medya Ayarları</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
