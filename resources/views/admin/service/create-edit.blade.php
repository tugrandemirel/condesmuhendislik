@extends('admin.layouts.app')
@section('title', 'Hizmet')
@section('css')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Hizmet Ayarları</h4>
                    <p class="sub-header">
                        Buradan hizmet ayarlarınızı {{ isset($service) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($service) ? route('admin.service.update',['service' => $service]) : route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @isset($service)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Hizmet Başlığı</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($service) ? $service->title : old('title') }}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Hizmet Resim</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" >
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Hizmet İcon(Boş Bırakılabilir)</label>
                                    <input type="file" class="form-control @error('icon') is-invalid @enderror" name="icon" >
                                    @error('icon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Hizmet Durumu</label>
                                    <select name="status" id="" class="form-select">
                                        <option value="1" {{ isset($service) && $service->status == 1 ? 'selected' : '' }}>Aktif</option>
                                        <option value="0" {{ isset($service) && $service->status == 0 ? 'selected' : '' }}>Pasif</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Hizmet Öne Çıkarma Durumu</label>
                                    <select name="is_show" id="" class="form-select">
                                        <option value="0" {{ isset($service) && $service->is_show == 0 ? 'selected' : '' }}>Öne Çıkarma</option>
                                        <option value="1" {{ isset($service) && $service->is_show == 1 ? 'selected' : '' }}>Öne Çıkar</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label">Hizmet İçeriği</label>
                                <textarea class="form-control ckeditor1 @error('content') is-invalid @enderror" name="content" id="" cols="30" rows="10">{{ isset($service) ? $service->content : '' }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Servis Meta Açıklaması(Seo için gerekli)</label>
                                    <input type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ isset($service) ? $service->meta_description : old('meta_description') }}">
                                    @error('meta_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Servis Meta Anahtar Kelimeleri(Seo için gerekli)</label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"  name="meta_keywords" value="{{ isset($service) ? $service->meta_keywords : old('meta_keywords') }}">
                                    <spam>Kelimeleri , ile ayırınız</spam>
                                    @error('meta_keywords')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        @isset($service)
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset($service->image) }}"  alt="" width="150">
                                </div>
                            </div>
                            <hr>
                        @endisset
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($service) ? 'Güncelle' : 'Kaydet' }}
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
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        let ck = document.querySelectorAll('.ckeditor1');
        for (let i = 0; i < ck.length; i++) {
            CKEDITOR.replace(ck[i], {
                height: 700,
                filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>
@endsection
