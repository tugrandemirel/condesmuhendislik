@extends('admin.layouts.app')
@section('title', 'Referanslar')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <button type="button" data-bs-toggle="modal"  data-bs-target="#referenceCreateModal" class="dropdown-item">Ekle</button>

                        </div>
                    </div>
                    <p class="text-muted font-14 mb-3">
                        Buradan Referanslarınızı yönetebilirsiniz
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Görsel</th>
                                <th>Referans Adı</th>
                                <th>URL</th>
                                <th>İşlem Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($references as $key=>$value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>
                                    <img src="{{ asset($value->image) }}" class="img-fluid" width="75" alt="{{ $value->name }}">
                                </td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    {{ $value->url }}
                                </td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <button data-url="{{ route('admin.references.destroy', ['references' => $value->id]) }}" class="btn btn-danger btn-sm removeReference">SİL</button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @include("admin.reference.reference-create-modal")
@endsection
@section('js')
    <script>
        $(document).ready(function (){
            $('.removeReference').click(function () {
                let url = $(this).data('url')
                let id = url.split('/')[5]

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        id: id,
                    },
                    success: function (response){
                        alert(response.message)
                        window.location.reload()
                    },
                    error: function (response){
                        alert(response.responseJSON.message)
                    }
                })

            })

            $('.upload-btn').on('click', function () {
                $(this).siblings('.file-input').click();
            });

            $('.file-input').on('change', function () {
                const file = this.files[0];
                if (!file) return;

                const wrapper = $(this).closest('.file-upload-wrapper');
                const preview = wrapper.find('.file-preview');
                const button = wrapper.find('.upload-btn');

                preview.empty(); // Önceki içerikleri temizle
                const fileType = file.type;
                const fileURL = URL.createObjectURL(file);

                const closeButton = $('<span>', {
                    class: 'position-absolute top-0 start-0 bg-danger text-white px-2 py-1',
                    style: 'cursor: pointer; z-index: 10;',
                    html: '&times;'
                }).on('click', function () {
                    wrapper.find('.file-input').val('');
                    preview.addClass('d-none').empty();
                    button.removeClass('d-none');
                });

                if ($(this).data('type') === 'image' && fileType.startsWith('image/')) {
                    const image = $('<img>', {
                        src: fileURL,
                        class: 'img-fluid rounded border',
                        style: 'max-height: 200px;'
                    });
                    preview.append(closeButton).append(image);
                } else {
                    const icon = $('<i>', { class: 'fa fa-file-alt fa-4x text-info mb-2' });
                    const fileName = $('<div>', { text: file.name, class: 'text-center' });
                    const container = $('<div>', {
                        class: 'd-flex flex-column align-items-center border rounded p-3',
                        style: 'background-color: #f1f1f1; min-height: 200px;'
                    });
                    container.append(icon).append(fileName);
                    preview.append(closeButton).append(container);
                }

                preview.removeClass('d-none');
                button.addClass('d-none');
            });

            // Çoklu görsel yükleme için buton tıklaması
            $('.upload-multiple-btn').on('click', function () {
                $(this).siblings('.multiple-images-input').click();
            });

            // Çoklu görsel seçilince önizleme
            $('.multiple-images-input').on('change', function () {
                const files = this.files;
                const wrapper = $(this).closest('.file-upload-wrapper');
                const previewContainer = wrapper.find('.multiple-preview');

                //previewContainer.empty(); // Önceki önizlemeleri temizle

                if (files.length === 0) return;

                Array.from(files).forEach((file, index) => {
                    const fileURL = URL.createObjectURL(file);
                    const imageWrapper = $('<div>', {
                        class: 'position-relative border rounded p-2',
                        style: 'max-width: 150px;'
                    });

                    const image = $('<img>', {
                        src: fileURL,
                        class: 'img-fluid rounded',
                        style: 'max-height: 100px;'
                    });

                    const closeButton = $('<span>', {
                        class: 'position-absolute top-0 start-0 bg-danger text-white px-1',
                        style: 'cursor: pointer; z-index: 10;',
                        html: '&times;'
                    }).on('click', function () {
                        // Seçilen dosyayı input'tan kaldırmak mümkün olmadığından sadece görseli gizleyeceğiz.
                        imageWrapper.remove();
                    });

                    imageWrapper.append(closeButton).append(image);
                    previewContainer.append(imageWrapper);
                });
            });

            $(document).on("click", "#create_reference_btn", function () {
                let btn = $(this)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let form = $("#create_reference_form");
                let form_data = new FormData(form[0]);
                let url = "{{ route('admin.references.store') }}";

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function (response) {

                            alert(response.message)
                            window.location.reload()

                    },
                    error: function (error) {
                        let {message} = error.responseJSON
                        alert(message)
                    },
                });

            })
        })
    </script>
@endsection
