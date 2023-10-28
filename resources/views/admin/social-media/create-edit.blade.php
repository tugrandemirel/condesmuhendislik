@extends('admin.layouts.app')
@section('title', 'Sosyal Medya Ayarları')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Sosyal Medya Ayarları</h4>
                    <p class="sub-header">
                        Buradan sosyal medya ayarlarınızı {{ isset($socialMedia) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($socialMedia) ? route('admin.social_media.update',['social_media' => $socialMedia]) : route('admin.social_media.store') }}" method="post">
                        @csrf
                        @isset($socialMedia)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Sosyal Medya Adı</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($socialMedia) ? $socialMedia->name : old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Sosyal Medya URL</label>
                                    <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ isset($socialMedia) ? $socialMedia->url : old('url') }}">
                                    @error('url')
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
                                    <label class="form-label">Sosyal Medya İkonu</label>
                                    <input type="text" placeholder="<i class='fab fa-facebook-f'></i> şeklinde olmalıdır." class="form-control @error('icon') is-invalid @enderror" name="icon" value="{{ isset($socialMedia) ? $socialMedia->icon : old('icon') }}">
                                    <span>
                                        <a href="https://fontawesome.com/v5/search">https://fontawesome.com/v5/search</a> sitesinden ulaşabilirsiniz.
                                    </span>
                                    @error('icon')
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
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($socialMedia) ? 'Güncelle' : 'Kaydet' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
