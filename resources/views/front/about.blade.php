@extends('front.layouts.app')
@section('title', ' - Hakkımızda')
@section('meta_description', isset($seo->description)  ? $seo->description : ''  )
@section('meta_keywords', isset($seo->keywords)  ? $seo->keywords : ''  )

@section('og_title', isset($seo->title) ? $seo->title : ' Hakkımızda')
@section('og_description', isset($seo->description) ? $seo->description : ' Hakkımızda'  )
@section('og_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hakkımızda'  )

@section('wa_title', isset($seo->title) ? $seo->title : ' Hakkımızda')
@section('wa_description', isset($seo->description) ? $seo->description : ' Hakkımızda'  )
@section('wa_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hakkımızda'  )

@section('content')
    <!--page-title-area start-->
    <!--page-title-area start-->
    <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100"
         data-background="{{ asset('assets/front/img/page-title/page-title-bg-1a.jpg') }}">
        <img class="page-title-shape shape-one " src="{{ asset('assets/front/img/shape/line-14d.svg') }}" alt="shape">
        <img class="page-title-shape shape-two" src="{{ asset('assets/front/img/shape/pattern-1a.svg') }} " alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-10">Hakkımızda</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">Hakkımızda</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!-- about__area start -->
    <section class="about__area">
        <div class="about__section__wrapper2 pt-245 pb-140 pt-lg-120 pb-lg-40 pb-md-20">
            <img class="about__shape__1" src="{{ asset('assets/front/img/shape/about-line-2a.svg') }}"
                 alt="About Shape">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="about__img__wrapper__four mb-30">
                            <img class="main__img__5d d-none d-xl-inline-block"
                                 src="{{ asset('assets/front/img/about/about-img-5d.jpg') }}" alt="About">
                            <img class="main__img__4b" src="{{ asset('assets/front/img/about/about-img-4d.jpg') }}"
                                 alt="About">
                            <div class="experience__box">
                                <img class="icon" src="{{ asset('assets/front/img/icon/icon-9a.svg') }}" alt="Icon">
                                <span>A+</span>
                                <h3>5+ Yıldan Fazla Deneyim</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about__text__wrapper ps-xl-3 mb-30">
                            <div class="section__title mb-30">
                                <h4 class="sub__title__one text-theme mb-20">ŞİRKET HAKKINDA</h4>
                                <h2 class="section__title__one mb-25">Vizyonumuz
                                </h2>
                                <p class="mb-35">İnsanlığın günümüz ve gelecekteki ihtiyaçları doğrultusunda bilimsel
                                    çalışmalar yapan,

                                    Mühendislik biliminde çağın teknolojisine yatkın olan,

                                    İmalat, enerji ve mekanik alanlarında bilimsel analizler yapan,

                                    Ekip olarak mühendislik çalışmalarına uyum sağlayabilen, proje geliştirebilen,
                                    uygulayabilen ve taahhüt edebilen nitelikte bir kuruluş olmak.</p>
                                <h2 class="section__title__one mb-25">Misyonumuz
                                </h2>
                                <p class="mb-35">Gelişmekte olan teknolojiye çağımızın gerektiren alanlarında çalışmalar
                                    yaparak endüstrinin gelişimine katkıda bulunan,

                                    İnsanlığın konforunu arttırmak,

                                    Daha sağlıklı ve daha güvenli çalışma hayatı için çalışmalar yapabilen bir kuruluş
                                    olmak.</p>
                                <a href="{{ route('contact') }}" class="ht_btn hover-bg"><span>İLETİŞİME GEÇ <img
                                            src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
                            </div>
                            <div class="quote__text mb-20">
                                “Mühendislik'te yenilik, Condes'te evrensel standart!”
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about__area end -->

    <!-- feature__area start -->
    <section class="feature__area pt-100 pb-150 pt-lg-40 pb-lg-20">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="single__box mb-30">
                        <div class="icon mb-35">
                            <img class="front-icon" src="{{ asset('assets/front/img/icon/icon-1a.svg') }}" alt="Icon">
                            <img class="back-icon" src="{{ asset('assets/front/img/icon/icon-1w.svg') }}" alt="Icon">
                        </div>
                        <h3 class="single__box__title"><a href="#">Tam Otomasyon</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__box mb-30">
                        <div class="icon mb-35">
                            <img class="front-icon" src="{{ asset('assets/front/img/icon/icon-2a.svg') }}" alt="Icon">
                            <img class="back-icon" src="{{ asset('assets/front/img/icon/icon-2w.svg') }}" alt="Icon">
                        </div>
                        <h3 class="single__box__title"><a href="#">Ölçeklenebilir Çözümler</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__box mb-30">
                        <div class="icon mb-35">
                            <img class="front-icon" src="{{ asset('assets/front/img/icon/icon-3a.svg') }}" alt="Icon">
                            <img class="back-icon" src="{{ asset('assets/front/img/icon/icon-3w.svg') }}" alt="Icon">
                        </div>
                        <h3 class="single__box__title"><a href="#">Enerji Verimliliği</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__box mb-30">
                        <div class="icon mb-35">
                            <img class="front-icon" src="{{ asset('assets/front/img/icon/icon-4a.svg') }}" alt="Icon">
                            <img class="back-icon" src="{{ asset('assets/front/img/icon/icon-4w.svg') }}" alt="Icon">
                        </div>
                        <h3 class="single__box__title"><a href="#">Güvenli & Emniyetli</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature__area end -->

    <!-- counter__area star -->
    <section class="grey-bg counter__area pt-105 pt-lg-50 pb-70 pb-lg-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__box mb-30">
                        <h3 class="counter__number"><span class="counter">5</span>Yıl</h3>
                        <p>Deneyim<br/>Süremiz</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__box ps-xl-5 mb-30">
                        <h3 class="counter__number"><span class="counter">{{ $serviceCount }}</span></h3>
                        <p>Toplam<br/>Hizmetimiz</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__box ps-xl-5 mb-30">
                        <h3 class="counter__number"><span class="counter">2</span>.5+k</h3>
                        <p>Mutlu<br/>
                            Müşterilerimiz</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter__area end -->

    <!-- chose__us__area start -->
    <!-- chose__us__area start -->
    <section class="chose__us__area pt-210 pt-lg-90 pt-md-55 pb-200 pb-lg-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 pe-xl-0">
                    <div class="chose__text__wrapper mb-30">
                        <h4 class="sub__title__one text-theme mb-20">Neden Bizi Tercih Etmelisiniz </h4>
                        <h2 class="section__title__one mb-25">Deneyim, inovasyon ve müşteri memnuniyetiyle dolu bir
                            ekibiz
                        </h2>
                        <ul class="text-list list-none">
                            <li>Sektöre Özel Çözümlerde Uzmanlık</li>
                            <li>En Son Teknolojiler ve Yenilikler</li>
                            <li>Mevzuata Uygunluk ve Risk Azaltma</li>
                            <li>Güvenilir, Profesyonel ve Zamanında Yürütme</li>
                            <li>Ölçeklenebilirlik ve Esneklik</li>
                        </ul>
                        <div class="mt-60">
                            <a href="{{ route('contact') }}" class="ht_btn hover-bg">
                                    <span>DAHA FAZLASI İÇİN
                                        <img src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt="">
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="chose__img__wrapper mb-30">
                        <img class="main__img__5d ps-xl-5 ms-xl-2" src="{{ asset('assets/front/img/chose/chose-img-5d.jpg') }}"
                             alt="Chose">
                        <img class="main__img__6d d-none d-md-inline-block"
                             src="{{ asset('assets/front/img/chose/chose-img-6d.jpg') }}" alt="Chose">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chose__us__area end -->


    <!-- video__area start -->
    <div class="video__area">
        <div class="full__video__bg video__four" data-background="{{ asset('assets/front/img/video/video-bg-4d.jpg') }}">@if(!is_null($_siteSetting->home_second_url))
            <div class="video__wrapper">

                <a class="popup-video" href="{{ $_siteSetting->home_second_url }}"><i
                        class="bi bi-play-fill"></i></a>


            </div>@endif
        </div>
    </div>
    <!-- video__area end -->


    <!-- working__process__area start -->
    <section class="working__process__area pt-90 pb-130 pt-lg-10 pb-lg-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-70 px-3">
                        <h4 class="sub__title__one mb-0">ÇALIŞMA SÜRECİMİZ</h4>
                        <div class="snake-line mb-15">
                            <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                        </div>
                        <h2 class="section__title__one">Bizim Uzmanlığımızı Seçmenin Faydaları</h2>
                    </div>
                </div>
            </div>
            <ul class="row working__process__list1">
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-1 mb-30">
                        <span class="step mb-20">Adım 01</span>
                        <h3 class="single__box__title mb-15">Araştırma</h3>
                        <p>Gereksinimleri, kısıtlamaları anlamak için veri ve içgörüler topluyoruz</p>
                    </div>
                </li>
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-2 mb-30">
                        <span class="step mb-20">Adım 02</span>
                        <h3 class="single__box__title mb-15">Planlama</h3>
                        <p>Her ayrıntıyı gözden geçiriyoruz. Uzman ekibimiz ile yapılması gerekenlerin yol haritasını
                            çiziyoruz</p>
                    </div>
                </li>
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-3 mb-30">
                        <span class="step mb-20">Adım 03</span>
                        <h3 class="single__box__title mb-15">Uygulama</h3>
                        <p>Konforunuzu artırmak için enerji verimliliğini yükseltiyor, sıcaklığı sizinle uyumlu hale
                            getiriyoruz</p>
                    </div>
                </li>
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-4 mb-30">
                        <span class="step mb-20">Adım 04</span>
                        <h3 class="single__box__title mb-15">Sonuç</h3>
                        <p>Sera gibi serin bir çevre sağlıyor, işlerinizi sıcak günlerde bile rahatlıkla yürütmenize
                            yardımcı oluyoruz</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- working__process__area end -->

    <!-- cta__area start -->
    @include('front.partials.map')
    <!-- cta__area end -->

@endsection
