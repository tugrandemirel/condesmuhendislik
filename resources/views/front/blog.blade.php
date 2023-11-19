@extends('front.layouts.app')
@section('title', ' - Makalelerimiz')
@section('meta_description', isset($seo->description)  ? $seo->description : ''  )
@section('meta_keywords', isset($seo->keywords)  ? $seo->keywords : ''  )

@section('og_title', isset($seo->title) ? $seo->title : ' Makalelerimiz')
@section('og_description', isset($seo->description) ? $seo->description : ' Makalelerimiz'  )
@section('og_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Makalelerimiz'  )

@section('wa_title', isset($seo->title) ? $seo->title : ' Makalelerimiz')
@section('wa_description', isset($seo->description) ? $seo->description : ' Makalelerimiz'  )
@section('wa_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Makalelerimiz'  )

@section('content')
    <!--page-title-area start-->
    <div class="page-title-area pt-220 pb-240 pt-lg-120 pb-lg-125 pb-md-100"
         data-background="{{ asset($_siteSetting->blog_image) }}">
        <img class="page-title-shape shape-one " src="{{ asset('assets/front/img/shape/line-14d.svg') }}" alt="shape">
        <img class="page-title-shape shape-two" src="{{ asset('assets/front/img/shape/pattern-1a.svg') }} " alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-10">Makalelerimiz</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">Makalalelerimiz</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!-- blog__area start -->
    <section class="blog__area pt-180 pt-lg-120 pb-170 pb-lg-120">
        <div class="container">
            <div class="section__title text-center mb-50">
                <h2 class="section__title__one">Son Makalelerimiz</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__one mb-30">
                            <div class="blog__thumb">
                                <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}"><img class="w-100" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"></a>
                            </div>
                            <div class="blog__content__one">
                                <h3 class="blog__title__three">
                                    <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more__btn__box text-center mt-30">
                <a href="{{ route('contact') }}" class="ht_btn hover-bg"><span>Daha Fazlası İçin <img
                            src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
            </div>
        </div>
    </section>
    <!-- blog__area end -->

    <!-- cta__area start -->
    @include('front.partials.map')
    <!-- cta__area end -->

@endsection
