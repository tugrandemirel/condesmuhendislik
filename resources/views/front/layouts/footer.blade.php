<!--footer-area start-->
<footer class="footer-area">
    <div class="footer-bg-two pt-95 pb-50" data-background="{{ asset($_siteSetting->footer_image ?? 'assets/front/img/footer/footer-bg-1a.jpg') }}">
        <img class="shapes__1" src="{{ asset('assets/front/img/shape/star-3a.svg') }}" alt="">
        <img class="shapes__2" src="{{ asset('assets/front/img/shape/line-7a.svg') }}" alt="">
        <div class="blur__shape"></div>
        <div class="container pt-200 pt-lg-10">
            <div class="row mb-25">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="footer__widget mb-30 px-xxl-3">
                        <a href="{{ route('index') }}"><img src="{{ asset($_siteSetting->logo) }}" width="217" height="62" alt="{{ $_siteSetting->title }}"></a>
                        <p class="footer__description mt-40">  “Mühendislik'te yenilik, Condes'te evrensel standart!”</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="footer__widget mb-30">
                        <ul class="fot-list">
                            <li>
                                <a href="{{ route('index') }}">Anasayfa</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">Hakkımızda</a>
                            </li>
                            <li>
                                <a href="{{ route('service') }}">Hizmetlerimiz</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Makalelerimiz</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="footer__widget mb-30">
                        <div class="footer__contact">

                            @if(!is_null($_siteSetting->phone) || !is_null($_siteSetting->phone_2))
                                @if($_siteSetting->phone)
                                    <h4 class="phone__nimber mb-25"><a href="tel:{{ $_siteSetting->phone }}">{{ $_siteSetting->phone }}</a></h4>
                                @endif
                                @if($_siteSetting->phone_2)
                                    <h4 class="phone__nimber mb-25"><a href="tel:{{ $_siteSetting->phone_2 }}">{{ $_siteSetting->phone_2 }}</a></h4>
                                @endif
                            @endif
                            @if(!is_null($_siteSetting->email))
                                    <p class="mb-0"><a href="mailto:{{ $_siteSetting->email }}">{{ $_siteSetting->email }}</a></p>
                                @endif
                                @if(!is_null($_siteSetting->address))
                            <p class="mb-0">{{ $_siteSetting->address }}</p>
                                @endif
                            <p class="mb-0">P.tesi: 08.00-18.00</p>
                            <p class="mb-0">C.tesi: 08.00-18.00</p>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6">
                    <div class="footer__widget mb-30">
                        <div class="social_media">
                           @foreach($_socialMedia as $_social)
                            <a href="{{ $_social->url }}" target="_blank" title="{{ $_social->name }}">
                                {!! $_social->icon !!}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright__border">
            <div class="copyright__area pt-75">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="copyright__text mb-30">
                            <p>
                                <a class="fw-bold" href="tel:+905443380633">Tuğran Demirel</a>
                                © 2023 Condes Mühendislik. Tüm hakları saklıdır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
