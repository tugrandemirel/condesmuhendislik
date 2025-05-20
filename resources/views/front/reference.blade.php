@extends('front.layouts.app')
@section('title', ' - Referenslarımız')


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
                        <h2 class="page-title mb-10">Referanslarımız</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('index') }}">Anasayfa</a></li>
                                <li class="active" aria-current="page">Referenaslarımız</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->
    <div class="service-section-2 pt-150 pb-120 pt-lg-80 pb-lg-50 pt-md-80 pb-md-50 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xxl-7 col-xl-8">
                    <div class="section-heading-wrap text-center">
                        <div class="sub-title text-theme-color mb-20 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h4 class="sub__title__one text-theme mb-20">Referanslarımız</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($references as $reference)
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card text-center">
                        <img class="card-img-top" src="{{ asset($reference->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ $reference->url }}">{{ $reference->name }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- cta__area start -->
    @include('front.partials.map')
    <!-- cta__area end -->

@endsection
