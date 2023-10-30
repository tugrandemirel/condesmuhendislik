@extends('front.layouts.app')
@section('title', ' - İletişim')
@section('meta_description', isset($seo->description)  ? $seo->description : ''  )
@section('meta_keywords', isset($seo->keywords)  ? $seo->keywords : ''  )

@section('og_title', isset($seo->title) ? $seo->title : ' İletişim')
@section('og_description', isset($seo->description) ? $seo->description : ' İletişim'  )
@section('og_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' İletişim'  )

@section('wa_title', isset($seo->title) ? $seo->title : ' İletişim')
@section('wa_description', isset($seo->description) ? $seo->description : ' İletişim'  )
@section('wa_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ' İletişim'  )

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
                        <h2 class="page-title mb-10">İletişim</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">İletişim</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--contact__section start-->
    <div class="contact__section pt-180 pb-140 pt-lg-120 pb-lg-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__info__wrapper me-xxl-4 pe-xxl-5 mb-45">
                        @if(!is_null($_siteSetting->phone))
                        <div class="single__info__box">
                            <div class="icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <span><a href="tel:{{ $_siteSetting->phone }}">{{ $_siteSetting->phone }}</a></span>
                        </div>
                        @endif
                        @if(!is_null($_siteSetting->phone_2))
                        <div class="single__info__box">
                            <div class="icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <span><a href="tel:{{ $_siteSetting->phone2 }}">{{ $_siteSetting->phone2 }}</a></span>
                        </div>
                        @endif
                        @if(!is_null($_siteSetting->email))
                            <div class="single__info__box">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <span><a href="mailto:{{ $_siteSetting->email }}">{{ $_siteSetting->email }}</a></span>
                            </div>
                        @endif
                        @if(!is_null($_siteSetting->address))
                        <div class="single__info__box">
                            <div class="icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <span>{{ $_siteSetting->address }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8">
                    @if(session()->has('success'))
                    <x-alert type="success">{{ session()->get('success') }}</x-alert>
                    @endif
                    @if(session()->has('error'))
                    <x-alert type="danger">{{ session()->get('error') }}</x-alert>
                    @endif
                    <div class="contact-form-one">
                        <h3 class="section__title__one mb-50">İletişim Formu</h3>
                        <form class="widget-form" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label">Ad</label>
                                    <input type="text" name="name" placeholder="Adınız" value="{{ old('name') }}">
                                    @error('name')
                                    <span style="color: red">  {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="label">Soyad</label>
                                    <input type="text" name="surname" placeholder="Soyadınız" value="{{ old('surname') }}">
                                    @error('surname')
                                    <span style="color: red">  {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="label">Email</label>
                                    <input type="email" name="email" placeholder="Emailiniz" value="{{ old('email') }}">

                                    @error('email')
                                    <span style="color: red">  {{ $message }}</span>

                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="label">Telefon</label>
                                    <input type="text" name="phone" placeholder="Telefon Numaranız" value="{{ old('phone') }}">
                                    @error('phone')
                                    <span style="color: red">  {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-25">
                                    <label class="label">Mesajınız</label>
                                    <textarea name="message" placeholder="Mesajınız">{{ old('message') }}</textarea>
                                    @error('message')
                                    <span style="color: red">  {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="ht_btn hover-bg border-0">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact__section end-->


    <!-- cta__area start -->
    @include('front.partials.map')
    <!-- cta__area end -->

@endsection
