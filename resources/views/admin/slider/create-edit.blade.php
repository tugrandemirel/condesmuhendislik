@extends('admin.layouts.app')
@section('title', isset($slider) ? 'Site Ayarı Güncelle' : 'Site Ayarı Ekle')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Site Ayarları</h4>
                    <p class="sub-header">
                        Buradan site ayarlarınızı {{ isset($slider) ? 'güncelleyebilirsiniz' : 'kaydedebilirsiniz' }}
                    </p>
                    <form action="{{ isset($slider) ? route('admin.slider.update',['slider' => $slider]) : route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @isset($slider)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Slider Resim</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ isset($slider) ? $slider->image : old('image') }}">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            @isset($slider->image)
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <img src="{{ asset($slider->image) }}" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                </div>
                            @endisset
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ isset($slider) ? 'Güncelle' : 'Kaydet' }}
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
