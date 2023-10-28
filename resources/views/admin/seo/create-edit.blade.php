@extends('admin.layouts.app')
@section('title', 'Seo Ayarları')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Site Ayarları</h4>
                    <p class="sub-header">
                        Buradan site ayarlarınızı {{ isset($seo) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($seo) ? route('admin.seo.update',['seo' => $seo]) : route('admin.seo.store') }}" method="post">
                        @csrf
                        @isset($seo)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Sayfa Adı</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($seo) ? $seo->title : old('title') }}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Sayfa Anahtar Kelimeleri</label>
                                    <input type="text" class="form-control @error('keywords') is-invalid @enderror"  name="keywords" value="{{ isset($seo) ? $seo->keywords : old('keywords') }}">
                                    <spam>Kelimeleri , ile ayırınız</spam>
                                    @error('keywords')
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
                                    <label class="form-label">Sayfa Açıklaması</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ isset($seo) ? $seo->description : old('description') }}">
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Sayfa Tipi</label>
                                    <select name="page_type" id="" class="form-select">
                                        <option value="GENEL" @if($seo->page_type == 'GENEL') selected @endif>GENEL</option>
                                        <option value="HIZMETLER" @if($seo->page_type == 'HIZMETLER') selected @endif>HİZMETLER</option>
                                        <option value="BLOG" @if($seo->page_type == 'BLOG') selected @endif>BLOG</option>
                                        <option value="ILETISIM" @if($seo->page_type == 'ILETISIM') selected @endif>İLETİSİM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($seo) ? 'Güncelle' : 'Kaydet' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
