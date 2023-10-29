@extends('front.layouts.app')
@section('title', ' - Makalelerimiz')
@section('meta_description', isset($seo->description)  ? $seo->description : ''  )
@section('meta_keywords', isset($seo->keywords)  ? $seo->keywords : ''  )

@section('og_title', isset($seo->title) ? $seo->title : ' Hizmetlerimiz')
@section('og_description', isset($seo->description) ? $seo->description : ' Hizmetlerimiz'  )
@section('og_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hizmetlerimiz'  )

@section('wa_title', isset($seo->title) ? $seo->title : ' Hizmetlerimiz')
@section('wa_description', isset($seo->description) ? $seo->description : ' Hizmetlerimiz'  )
@section('wa_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hizmetlerimiz'  )

@section('content')
    <!--page-title-area start-->
    <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100"
         data-background="{{ asset($_siteSetting->service_image) }}">
        <img class="page-title-shape shape-one " src="{{ asset('assets/front/img/shape/line-14d.svg') }}" alt="shape">
        <img class="page-title-shape shape-two" src="{{ asset('assets/front/img/shape/pattern-1a.svg') }} " alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-10">Hizmetlerimiz</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">Hizmetlerimiz</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->


    <!-- services__area start -->
    <section class="services__area2 pt-90 pt-lg-55 pb-170 pb-lg-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-60">
                        <h2 class="section__title__one ">Şirketimiz İle Dönüşün <span
                                class="text-theme">Hizmetlerimiz</span></h2>
                    </div>
                </div>
            </div>
            @if($services->count() > 0)
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single__services__box mb-60">
                        <div class="services__thumb">
                            <img class="w-100" src="{{ asset($service->image) }}"
                                 width="410" height="370" alt="{{ $service->title }}">
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
            @endif
            <div class="row mt-30">
                <div class="col-12 text-center">
                    <a href="{{ route('contact') }}" class="ht_btn hover-bg"><span>Daha Fazlası İçin <img
                                src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- services__area end -->


    @include('front.partials.map')

@endsection
