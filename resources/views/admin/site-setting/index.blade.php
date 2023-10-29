@extends('admin.layouts.app')
@section('title', isset($siteSetting) ? 'Site Ayarı Güncelle' : 'Site Ayarı Ekle')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Site Ayarları</h4>
                    <p class="sub-header">
                        Buradan site ayarlarınızı {{ isset($siteSetting) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>

                    <ul class="nav nav-tabs nav-bordered">
                        <li class="nav-item">
                            <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Genel Ayarlar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
                                Görsel Ayarları
                            </a>
                        </li>
                    </ul>
                    <form action="{{ isset($siteSetting) ? route('admin.site_setting.update',['site_setting' => $siteSetting]) : route('admin.site_setting.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @isset($siteSetting)
                            @method('PUT')
                        @endisset
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-b2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Site Adı</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($siteSetting) ? $siteSetting->title : old('title') }}">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Site Email Adresi</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($siteSetting) ? $siteSetting->email : old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Site Logo</label>
                                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                                        @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Site Favicon</label>
                                        <input type="file" class="form-control @error('favicon') is-invalid @enderror" name="favicon">
                                        @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @if(isset($siteSetting->logo) || isset($siteSetting->favicon))
                                <div class="row justify-content-center">
                                    @isset($siteSetting->logo)
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <img src="{{ asset($siteSetting->logo) }}" alt="" width="150">
                                                </label>
                                            </div>
                                        </div>
                                    @endisset
                                    @isset($siteSetting->favicon)
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <img src="{{ asset($siteSetting->favicon) }}" alt="" width="150">
                                                </label>
                                            </div>
                                        </div>
                                    @endisset
                                </div>
                            @endif
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row " >
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Site 1. Telefon Numarası</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ isset($siteSetting) ? $siteSetting->phone : old('phone') }}">
                                                </div>
                                                @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Site 1. Telefon Sahibi</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control @error('phone_user') is-invalid @enderror" name="phone_user" value="{{ isset($siteSetting) ? $siteSetting->phone_user : old('phone_user') }}">
                                                </div>
                                                @error('phone_user')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Site 2. Telefon Numarası</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control @error('phone_2') is-invalid @enderror" name="phone_2" value="{{ isset($siteSetting) ? $siteSetting->phone_2 : old('phone_2') }}">
                                                </div>
                                                @error('phone_2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Site 2. Telefon Sahibi</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control @error('phone_user_2') is-invalid @enderror" name="phone_user_2" value="{{ isset($siteSetting) ? $siteSetting->phone_user_2 : old('phone_user_2') }}">
                                                </div>
                                                @error('phone_user_2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{--@if(!$siteSetting->phone)
                                            <div class="col-md-9">
                                                <div class="mb-3">
                                                    <label class="form-label">Site Telefon Numarası</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone[]">
                                                        <button class="btn input-group-text btn-success waves-effect waves-light removeButton" type="button">+</button>
                                                    </div>
                                                    @error('logo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @else
                                            @php $i = 0; @endphp
                                            @foreach(json_decode($siteSetting->phone) as $phone)
                                                <div class="col-md-9">
                                                    <div class="mb-3">
                                                        <label class="form-label">Site Telefon Numarası</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone[]" value="{{ $phone }}">
                                                            <button class="btn input-group-text btn-danger waves-effect waves-danger removeButton" type="button">x</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($i == 0)

                                                    <div class="col-lg-3">
                                                        <div class="mb-3" style="margin-top: 30px;">
                                                            <button type="button" id="addPhone" class="btn btn-success waves-effect waves-light">
                                                                <i class="mdi mdi-phone-plus-outline"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif
                                                @php $i++; @endphp
                                            @endforeach
                                        @endif--}}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Adres</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ isset($siteSetting) ? $siteSetting->email : old('address') }}">
                                        @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="profile-b2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">HEADER Görsel</label>
                                        <input type="file" class="form-control @error('header_image') is-invalid @enderror" name="header_image">
                                        @error('header_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">FOOTER Görsel</label>
                                        <input type="file" class="form-control @error('footer_image') is-invalid @enderror" name="footer_image">
                                        @error('footer_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                @isset($siteSetting->header_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->header_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                                @isset($siteSetting->footer_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->footer_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa Birinci Video Arka Plan Görsel</label>
                                        <input type="file" class="form-control @error('home_first_image') is-invalid @enderror" name="home_first_image">
                                        @error('home_first_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa Birinci Video URL</label>
                                        <input type="text" class="form-control @error('home_first_url') is-invalid @enderror" name="home_first_url">
                                        @error('home_first_url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                @isset($siteSetting->home_first_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->home_first_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa İkinci Video Arka Plan Görsel</label>
                                        <input type="file" class="form-control @error('home_second_image') is-invalid @enderror" name="home_second_image">
                                        @error('home_second_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa İkinci Video URL</label>
                                        <input type="text" class="form-control @error('home_second_url') is-invalid @enderror" name="home_second_url">
                                        @error('home_second_url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                @isset($siteSetting->home_second_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->home_second_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa Sıkça Sorulan Sorular ANA Görsel</label>
                                        <input type="file" class="form-control @error('home_faq_main') is-invalid @enderror" name="home_faq_main">
                                        @error('home_faq_main')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa Sıkça Sorulan Sorular ÜST Görsel</label>
                                        <input type="file" class="form-control @error('home_faq_up') is-invalid @enderror" name="home_faq_up">
                                        @error('home_faq_up')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Anasayfa Sıkça Sorulan Sorular ALT Görsel</label>
                                        <input type="file" class="form-control @error('home_faq_down') is-invalid @enderror" name="home_faq_down">
                                        @error('home_faq_down')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                @isset($siteSetting->home_faq_main)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->home_faq_main) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                                @isset($siteSetting->home_faq_down)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->home_faq_down) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                                @isset($siteSetting->home_faq_up)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->home_faq_up) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blogların Listelendiği Sayfa BANNER Görsel</label>
                                        <input type="file" class="form-control @error('blog_image') is-invalid @enderror" name="blog_image">
                                        @error('blog_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Detay Sayfası BANNER Görsel</label>
                                        <input type="file" class="form-control @error('blog_detail_image') is-invalid @enderror" name="blog_detail_image">
                                        @error('blog_detail_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                @isset($siteSetting->blog_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->blog_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset

                                @isset($siteSetting->blog_detail_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->blog_detail_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Hizmetlerin Listelendiği Sayfa BANNER Görsel</label>
                                        <input type="file" class="form-control @error('service_image') is-invalid @enderror" name="service_image">
                                        @error('service_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Hizmet Detay Sayfası BANNER Görsel</label>
                                        <input type="file" class="form-control @error('service_detail_image') is-invalid @enderror" name="service_detail_image">
                                        @error('service_detail_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                @isset($siteSetting->service_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->service_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                                @isset($siteSetting->service_detail_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->service_detail_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">İletişim Sayfası BANNER Görsel</label>
                                        <input type="file" class="form-control @error('contact_image') is-invalid @enderror" name="contact_image">
                                        @error('contact_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                @isset($siteSetting->contact_image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                <img src="{{ asset($siteSetting->contact_image) }}" alt="" width="150">
                                            </label>
                                        </div>
                                    </div>
                                @endisset
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                {{ isset($siteSetting) ? 'Güncelle' : 'Kaydet' }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
@section('js')
   {{-- <script>
        $(document).ready(function () {
            $('#addPhone').click(function () {
                var html = '' +
                '<div class="col-md-9">' +
                    '<div class="mb-3">' +
                        '<label class="form-label">Site Telefon Numarası</label>' +
                        '<div class="input-group">' +
                            '<input type="text" class="form-control" name="phone[]" value=""> ' +
                            '<button class="btn input-group-text btn-danger waves-effect waves-danger removeButton" type="button">x</button>' +
                        '</div>' +
                    '</div>' +
                '</div>'
                $('.phones').append(html);
            });
            $(document).on('click', '.removeButton', function () {
                console.log('test')
                $(this).closest('.col-md-9').remove();
            });
        });
    </script>--}}
@endsection
