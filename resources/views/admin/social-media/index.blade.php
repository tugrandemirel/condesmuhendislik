@extends('admin.layouts.app')
@section('title', 'Sosyal Medya Ayarları')
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
                            <a href="{{ route('admin.social_media.create') }}" class="dropdown-item">Ekle</a>

                        </div>
                    </div>
                    <p class="text-muted font-14 mb-3">
                        Buradan sosyal medya ayarlarınızı yönetebilirsiniz
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Sosyal Medya Adı</th>
                                <th>Sosyal Medya Icon</th>
                                <th>URL</th>
                                <th>İşlem Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($socialMedias as $key=>$value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->icon }}</td>
                                <td>{{ $value->url }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.social_media.edit', ['social_media' => $value]) }}" class="btn btn-primary btn-sm">Düzenle</a>
                                    <button data-url="{{ route('admin.social_media.destroy', ['social_media' => $value]) }}" class="btn btn-danger btn-sm removeSocialMedia">SİL</button>
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
@endsection
@section('js')
    <script>
        $(document).ready(function (){
            $('.removeSocialMedia').click(function () {
                let url = $(this).data('url')
                let id = url.split('/')[5]
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response){
                        if (response.success === true){
                            alert(response.message)
                            window.location.reload()
                        }
                    },
                    error: function (response){
                        alert(response.message)
                    }
                })

            })
        })
    </script>
@endsection
