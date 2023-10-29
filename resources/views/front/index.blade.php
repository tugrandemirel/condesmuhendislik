@extends('front.layouts.app')
@section('content')
    <!-- theme__main__banner start -->
    <section class="theme__main__banner black-bg pt-215 pb-205 pb-lg-100">
        <div class="shapes__blur"></div>
        @if(!is_null($_siteSetting->header_image))
            <img class="shapes shapes__1" src="{{ asset($_siteSetting->header_image) }}" alt="{{ $_siteSetting->title }}">
        @endif
        <img class="shapes shapes__2" src="{{ asset('assets/front/img/shape/hero-line-1.svg') }}" alt="Shape Two">
        <img class="shapes shapes__3" src="{{ asset('assets/front/img/shape/star-1.svg') }}" alt="Shape Three">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-12">
                    <div class="theme__content text-xl-start text-center mb-5 mb-lg-0">
                        <h4 class="sub__title mb-25">VERİMLİLİĞİ OPTİMİZE EDİN</h4>
                        <h2 class="main__title mb-45">Fabrika & Endüstriler için En İyi Çözümler
                        </h2>
                        <a href="{{ route('contact') }}" class="ht_btn"><span>Şimdi Keşfet <img src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none">
                    <div class="hero__img">
                        <img src="{{ asset('assets/front/img/hero/hero-main-1a.jpg') }}" alt="hero__img">
                    </div>
                </div>
            </div>
        </div>
        @if($sliders->count() > 0)
        <div class="swiper hero__slider">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <img src="{{ $slider->image }}" alt="{{ $_siteSetting->title }}">
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"><img src="{{ asset('assets/front/img/icon/chevron-arrow-left.svg') }}" alt="Arrow"></div>
            <div class="swiper-button-next"><img src="{{ asset('assets/front/img/icon/chevron-arrow-right.svg') }}" alt="Arrow">
            </div>
        </div>
        @endif
    </section>
    <!-- theme__maina__banner end -->

    <!-- about__area start -->
    <section class="about__area">
        <div class="grey-bg about__section__wrapper pt-180 pb-70 pt-lg-120 pb-lg-30">
            <div data-text="About" class="big-style-text">HAKKIMIZDA</div>
            <img class="about__shape__1" src="{{ asset('assets/front/img/shape/about-line-2a.svg') }}" alt="About Shape">
            <img class="about__shape__2" src="{{ asset('assets/front/img/shape/about-line-3a.svg') }}" alt="About Shape">
            <div class="container">
                <div class="row align-items-center mb-20">
                    <div class="col-lg-9 pe-lg-0">
                        <div class="section__title text-lg-start text-center mb-30">
                            <h4 class="sub__title__one mb-0">HAKKIMIZDA</h4>
                            <div class="snake-line mb-15">
                                <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                            </div>
                            <h2 class="section__title__one">Endüstrileri yenilikçi çözümlerle güçlendirerek, verimliliği ve üretkenliği artırmak için fabrika operasyonlarında devrim yaratıyoruz.</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center justify-content-lg-end">
                        <div class="about__circular__box mb-30">
                            <img src="{{ asset('assets/front/img/about/circular-text.png') }}" alt="Circular Text">
                            <span>A+</span>
                        </div>
                    </div>
                </div>
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
        </div>
    </section>
    <!-- about__area end -->
    @if($services->count() > 0)
    <!-- services__area start -->
    <section class="services__area pt-180 pb-45 pt-lg-60 pb-lg-40">
        <div class="big-style-text">HİZMETLERİMİZ</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-50">
                        <h4 class="sub__title__one mb-0">HİZMETLERİMİZ</h4>
                        <div class="snake-line mb-15">
                            <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                        </div>
                        <h2 class="section__title__one">Hizmetlerimiz İle <span>En İyi</span> Dönüşüme Uğrayın
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper services__slide__one pb-60">
                        <div class="swiper-wrapper">
                            @foreach($services as $service)
                            <div class="swiper-slide">
                                <div class="single__services__box mb-60">
                                    <div class="services__thumb">
                                        <img class="w-100" src="{{ asset($service->image) }}"
                                            width="410" height="370" alt="Service">
                                    </div>
                                    <div class="services__content">
                                        <h4 class="single__service__title"><a
                                                href="{{ route('service.detail', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                        </h4>
                                        <a href="{{ route('service.detail', ['slug' => $service->slug]) }}"><img src="{{ asset('assets/front/img/icon/long-arrow.svg') }}" alt="Arrow"></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services__area end -->
    @endif
    <!-- chose__us__area start -->
    <section class="chose__us__area pt-120 pt-lg-60 pb-85 pb-lg-30">
        <div class="chose__section__wrapper">
            <div class="big-style-text">NEDEN</div>
            <div class="chose__video__content" data-background="{{ asset($_siteSetting->home_first_image) }}">
                @if(!is_null($_siteSetting->home_first_url))
                <div class="video__wrapper">
                    <a class="popup-video mb-30" href="{{ asset($_siteSetting->home_first_url) }}"><i class="bi bi-play-fill"></i></a>
                </div>
                @endif
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="chose__text__wrapper ps-xl-5 ms-xl-4 mb-30 pt-50">
                            <h4 class="sub__title__one mb-0">NEDEN BİZİMLE ÇALIŞMALISINIZ</h4>
                            <div class="snake-line mb-15">
                                <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                            </div>
                            <h2 class="section__title__one mb-30">Deneyim, inovasyon ve müşteri memnuniyetiyle dolu bir ekibiz
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
                </div>
            </div>
        </div>
    </section>
    <!-- chose__us__area end -->

    <!-- counter__area star -->
    <section class="counter__area">
        <div class="grey-bg counter__section__wrapper">
            <img class="shapes__1 d-none d-xl-inline-block" src="{{ asset('assets/front/img/shape/line-9a.svg') }}" alt="Shape">
            <img class="shapes__2 d-none d-xl-inline-block" src="{{ asset('assets/front/img/shape/line-10a.svg') }}" alt="Shape">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__box mb-30">
                            <h3 class="counter__number"><span class="counter">5</span>Yıl</h3>
                            <p>Deneyim<br />Süremiz</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__box ps-xl-5 mb-30">
                            <h3 class="counter__number"><span class="counter">{{ $services->count() }}</span></h3>
                            <p>Toplam<br />Hizmetimiz</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__box ps-xl-5 mb-30">
                            <h3 class="counter__number"><span class="counter">2</span>.5+k</h3>
                            <p>Mutlu<br />
                                Müşterilerimiz</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- counter__area end -->

    <!-- video__area start -->
    <section class="video__area">
        <div class="video__section__wrapper pb-80 pb-lg-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="full__video__bg" data-background="{{ asset($_siteSetting->home_second_image) }}">
                            @if(!is_null($_siteSetting->home_second_url))
                            <div class="video__wrapper">
                                <img class="video__text" src="{{ asset('assets/front/img/video/video-text-circular.svg') }}"
                                     alt="Circular">
                                <a class="popup-video" href="{{$_siteSetting->home_second_url}}"><i class="bi bi-play-fill"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <p>Her ayrıntıyı gözden geçiriyoruz. Uzman ekibimiz ile yapılması gerekenlerin yol haritasını çiziyoruz</p>
                    </div>
                </li>
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-3 mb-30">
                        <span class="step mb-20">Adım 03</span>
                        <h3 class="single__box__title mb-15">Uygulama</h3>
                        <p>Konforunuzu artırmak için enerji verimliliğini yükseltiyor, sıcaklığı sizinle uyumlu hale getiriyoruz</p>
                    </div>
                </li>
                <li class="col-xxl-3 col-md-6">
                    <div class="working__step step-4 mb-30">
                        <span class="step mb-20">Adım 04</span>
                        <h3 class="single__box__title mb-15">Sonuç</h3>
                        <p>Sera gibi serin bir çevre sağlıyor, işlerinizi sıcak günlerde bile rahatlıkla yürütmenize yardımcı oluyoruz</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- working__process__area end -->

    <!-- faq__area start -->
    <section class="faq__area">
        <div class="grey-bg faq__section__wrapper pt-140 pb-90 pt-lg-60 pb-lg-30">
            <div class="big-style-text">SSS</div>
            <img class="shapes__1" src="{{ asset('assets/front/img/shape/faq-line-4a.svg') }}" alt="Shape">
            <img class="shapes__2" src="{{ asset('assets/front/img/shape/faq-line-5a.svg') }}" alt="Shape">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq__que__list mb-30 pe-xl-5 me-xl-4">
                            <div class="section__title mb-50">
                                <h4 class="sub__title__one mb-0">SSS</h4>
                                <div class="snake-line mb-15">
                                    <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                                </div>
                                <h2 class="section__title__one">Sıkca Sorulan Sorular</h2>
                            </div>
                            <div class="accordion accordion-one mb-60" id="accordionExample">
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            Periyodik kontrol nedir?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Here you can write answers to the most frequently asked
                                                questions.
                                                It’s
                                                better to answer them on your website once than personally more
                                                frequently.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            Neden periyodik kontrol yaptırmalıyız?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Here you can write answers to the most frequently asked
                                                questions.
                                                It’s
                                                better to answer them on your website once than personally more
                                                frequently.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            Periyodik kontrolleri kim tarafından yapılıyor?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Çalışma ve Sosyal Güvenlik Bakanlığının görevlendirmiş olduğu yetkili makine mühendisleri tarafından yapılmaktadır.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="ht_btn hover-bg"><span>Soru Sor <img src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__img__wrapper mb-30">
                            <div class="counter__wrapper">
                                <h5>Deneyim</h5>
                                <h3>5 <span>+</span></h3>
                                <h5>Yıldan Fazla</h5>
                            </div>
                            @if(!is_null($_siteSetting->home_faq_main))
                            <img class="faq__img__main w-100" src="{{ asset($_siteSetting->home_faq_main) }}" alt="{{ $_siteSetting->title }}">
                            @endif
                            @if(!is_null($_siteSetting->home_faq_up))
                            <img class="faq__thumb1 d-none d-lg-inline-block" src="{{ asset($_siteSetting->home_faq_main) }}" alt="{{ $_siteSetting->title }}">
                            @endif
                            @if(!is_null($_siteSetting->home_faq_down))
                            <img class="faq__thumb2 d-none d-lg-inline-block" src="{{ asset($_siteSetting->home_faq_down) }}" alt="{{ $_siteSetting->title }}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq__area end -->
    @if($blogs->count() > 0)
    <!-- blog__area start -->
    <section class="blog__area pt-180 pt-md-60 pb-170 pb-lg-60">
        <div class="big-style-text">MAKALELERİMİZ</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__title text-center mb-50">
                        <h4 class="sub__title__one mb-0">Son Yazılarımız</h4>
                        <div class="snake-line mb-15">
                            <img src="{{ asset('assets/front/img/shape/snake-line-1a.svg') }}" alt="line">
                        </div>
                        <h2 class="section__title__one">MAKALELER</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                 @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog__one mb-30">
                        <div class="blog__thumb mb-25">
                            <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">
                                <img class="w-100" src="{{ asset($blog->image) }}" width="410" height="320" alt="Blog"></a>
                        </div>
                        <h3 class="blog__title"><a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more__btn__box text-center mt-30">
                <a href="{{ route('blog') }}" class="ht_btn hover-bg"><span>Daha Fazlası <img
                            src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
            </div>
        </div>
    </section>
    <!-- blog__area end -->
    @endif
   {{-- <!-- testimonial__area start -->
    <section class="testimonial__area">
        <div class="grey-bg testimonial__section__wrapper pt-100 pb-80 pt-lg-60 pb-lg-60">
            <img class="shapes__1" src="{{ asset('assets/front/img/shape/star-2a.svg') }}" alt="Star">
            <img class="shapes__2" src="{{ asset('assets/front/img/shape/line-6a.svg') }}" alt="Star">
            <img class="testimonial-bg" src="{{ asset('assets/front/img/testimonial/testimonial-bg-1a.jpg') }}" alt="Testimonial">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-end">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="section__title text-center text-xl-start mb-50">
                            <h4 class="sub__title__one mb-0">Testimonails</h4>
                            <div class="snake-line mb-15">
                                <img src="assets/img/shape/snake-line-1a.svg" alt="line">
                            </div>
                            <h2 class="section__title__one">What Our Customers Say About <span>Factry</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-10 col-lg-12">
                        <div class="swiper testimonial__slider__one">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper">
                                        <div class="rating">
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <span class="rating__number">4.5</span>
                                        </div>
                                        <div class="divider mt-15 mb-20"></div>
                                        <p class="mb-25">“Once we settled on a strategy, the team went to work
                                            implementing.
                                            The
                                            website they
                                            created for stunning.”</p>
                                        <div class="author d-flex align-items-center">
                                            <div class="author__img mr-20">
                                                <img src="assets/img/testimonial/author-1a.jpg" alt="Author">
                                            </div>
                                            <div class="auhtor__content">
                                                <h3 class="author__name">Annette Black</h3>
                                                <h5 class="author__designation">Marketing Coordinator</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper">
                                        <div class="rating">
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <span class="rating__number">5.0</span>
                                        </div>
                                        <div class="divider mt-15 mb-20"></div>
                                        <p class="mb-25">“Once we settled on a strategy, the team went to work
                                            implementing.
                                            The
                                            website they
                                            created for stunning.”</p>
                                        <div class="author d-flex align-items-center">
                                            <div class="author__img mr-20">
                                                <img src="assets/img/testimonial/author-2a.jpg" alt="Author">
                                            </div>
                                            <div class="auhtor__content">
                                                <h3 class="author__name">Courtney Henry</h3>
                                                <h5 class="author__designation">Roof Engineer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper">
                                        <div class="rating">
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <span class="rating__number">4.5</span>
                                        </div>
                                        <div class="divider mt-15 mb-20"></div>
                                        <p class="mb-25">“Once we settled on a strategy, the team went to work
                                            implementing.
                                            The
                                            website they
                                            created for stunning.”</p>
                                        <div class="author d-flex align-items-center">
                                            <div class="author__img mr-20">
                                                <img src="assets/img/testimonial/author-1a.jpg" alt="Author">
                                            </div>
                                            <div class="auhtor__content">
                                                <h3 class="author__name">Annette Black</h3>
                                                <h5 class="author__designation">Marketing Coordinator</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper">
                                        <div class="rating">
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <a href="#"><i class="bi bi-star-fill"></i></a>
                                            <span class="rating__number">5.0</span>
                                        </div>
                                        <div class="divider mt-15 mb-20"></div>
                                        <p class="mb-25">“Once we settled on a strategy, the team went to work
                                            implementing.
                                            The
                                            website they
                                            created for stunning.”</p>
                                        <div class="author d-flex align-items-center">
                                            <div class="author__img mr-20">
                                                <img src="assets/img/testimonial/author-2a.jpg" alt="Author">
                                            </div>
                                            <div class="auhtor__content">
                                                <h3 class="author__name">Courtney Henry</h3>
                                                <h5 class="author__designation">Trainer</h5>
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
    </section>
    <!-- testimonial__area end -->--}}

@endsection
