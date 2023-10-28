@extends('admin.layouts.app')
@section('title', 'Seo Ayarları')
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
                            <a href="{{ route('admin.seo.create') }}" class="dropdown-item">Ekle</a>

                        </div>
                    </div>
                    <p class="text-muted font-14 mb-3">
                        Buradan seo ayarlarınızı yönetebilirsiniz
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>SEO Adı</th>
                                <th>Sayfa Tipi</th>
                                <th>Tarih</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($seos as $key=>$value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->page_type }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.seo.edit', ['seo' => $value]) }}" class="btn btn-primary btn-sm">Düzenle</a>
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
