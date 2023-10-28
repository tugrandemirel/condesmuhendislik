@extends('admin.layouts.app')
@section('title', isset($siteSetting) ? 'Site Ayarı Güncelle' : 'Site Ayarı Ekle')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Site Ayarları</h4>
                    <p class="sub-header">
                        Buradan site ayarlarınızı {{ isset($siteSetting) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($siteSetting) ? route('admin.site_setting.update',['site_setting' => $siteSetting]) : route('admin.site_setting.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @isset($siteSetting)
                            @method('PUT')
                        @endisset
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
                                <div class="row phones" >
                                    @if(!$siteSetting->phone)
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
                                    @endif
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
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($siteSetting) ? 'Güncelle' : 'Kaydet' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
@section('js')
    <script>
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
    </script>
@endsection
