@extends('admin.layouts.app')
@section('title', 'Blog')
@section('css')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Blog Ayarları</h4>
                    <p class="sub-header">
                        Buradan blog ayarlarınızı {{ isset($blog) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($blog) ? route('admin.blog.update',['blog' => $blog]) : route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @isset($blog)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Blog Başlığı</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($blog) ? $blog->title : old('title') }}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Blog Resim</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" >
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Blog Durumu</label>
                                    <select name="status" id="" class="form-select">
                                        <option value="1" {{ isset($blog) && $blog->status == 1 ? 'selected' : '' }}>Aktif</option>
                                        <option value="0" {{ isset($blog) && $blog->status == 0 ? 'selected' : '' }}>Pasif</option>
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
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Blog Kısa Açıklama</label>
                                    <textarea name="short_description" class="form-control" id="" cols="30" rows="10">{{ isset($blog) ? $blog->short_description : old('short_description') }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Kullanıcı Notu(Boş Bırakılabilir)</label>
                                    <textarea name="user_notes" class="form-control" id="" cols="30" rows="10">{{ isset($blog) ? $blog->user_notes : old('user_notes') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label">Blog İçeriği</label>
                                <textarea class="form-control ckeditor1 @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10">{{ isset($blog) ? $blog->description : '' }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Blog Meta Açıklaması(Seo için gerekli)</label>
                                    <input type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ isset($blog) ? $blog->meta_description : old('meta_description') }}">
                                    @error('meta_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Blog Meta Anahtar Kelimeleri(Seo için gerekli)</label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"  name="meta_keywords" value="{{ isset($blog) ? $blog->meta_keywords : old('meta_keywords') }}">
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
                        @isset($blog)
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset($blog->image) }}"  alt="" width="150">
                                </div>
                            </div>
                            <hr>
                        @endisset
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($blog) ? 'Güncelle' : 'Kaydet' }}
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
