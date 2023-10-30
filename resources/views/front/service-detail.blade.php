@extends('front.layouts.app')
@section('title', ' - ' .$service->title)
@section('meta_description', isset($service->meta_description)  ? $service->meta_description : ' Makalelerimiz Detay'  )
@section('meta_keywords', isset($service->meta_keywords)  ? $service->meta_keywords : ' Makalelerimiz Detay'  )

@section('og_title', isset($service->title) ? $service->title : ' Makalelerimiz Detay')
@section('og_description', isset($service->meta_description) ? $service->meta_description : ' Makalelerimiz Detay'  )
@section('og_image', isset($service->image) ? asset($service->image) : asset($_siteSetting->logo)  )

@section('wa_title', isset($service->title) ? $service->title : ' Makalelerimiz')
@section('wa_description', isset($service->meta_description) ? $service->meta_description : ' Makalelerimiz Detay'  )
@section('wa_image', isset($service->image) ? asset($service->image) : asset($_siteSetting->logo)  )

@section('content')
    <!--page-title-area start-->
    <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-50"
         data-background="{{ asset($_siteSetting->service_detail_image) }}">
        <img class="page-title-shape shape-one " src="{{ asset('assets/front/img/shape/line-14d.svg') }}" alt="shape">
        <img class="page-title-shape shape-two" src="{{ asset('assets/front/img/shape/pattern-1a.svg') }} " alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-10">Hizmet Detay</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">Hizmetimiz</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!-- blog__details__area start -->
    <section class="blog__details__area pt-180 pt-lg-120 pb-170 pb-lg-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="blog__details__wrapper">
                        <h2 class="blog__title__big mb-10">{{ $service->title }}</h2>
                        <div class="blog__meta mb-25">
                            <a class="text-theme" href="#">{{ $service->created_at->format('d-m-y') }} </a>
                        </div>
                        <img class="w-100 mb-30" src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                        <p class="mb-30">
                            {{ $service->short_description }}
                        </p>
                        @isset($service->user_notes)
                            <figure class="author-blockquote mb-50">
                                <figcaption class="blockquote-footer">
                                </figcaption>
                                <blockquote class="blockquote">
                                    <p>{!! $service->user_notes !!} </p>
                                    <img src="{{ asset('assets/front/img/icon/quotation-2c.svg') }}" alt="">
                                </blockquote>
                            </figure>
                        @endisset
                        <p>
                            {!! $service->content !!}
                        </p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="widget-right-section ps-xl-4 ms-xl-3 mb-40">
                        <div class="grey-bg widget widget-post mb-60">
                            <div class="widget-title-box mb-20">
                                <h4 class="widget__title__three">Diğer Hizmetlerimiz</h4>
                            </div>
                            <ul class="post-list">
                                @foreach($recentServices as $recent)
                                    <li>
                                        <div class="blog-post mb-20">
                                            <div class="post-content">
                                                <span>{{ $recent->created_at->format('d-m-y') }} </span>
                                                <h6 class="mb-10"><a href="{{ route('service.detail', ['slug' => $recent->slug]) }}">{{ $recent->title }}</a></h6>
                                            </div>
                                            <a href="{{ route('service.detail', ['slug' => $recent->slug]) }}"><img src="{{ asset($recent->image) }}" width="75" alt="{{ $recent->title }}"></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog__details__area end -->
    <!-- cta__area start -->
    @include('front.partials.map')
    <!-- cta__area end -->

@endsection
