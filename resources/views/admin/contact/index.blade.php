@extends('admin.layouts.app')
@section('title', 'Mesajlar')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted font-14 mb-3">
                        Buradan size iletilen mesajları görebilirsiniz. En son iletilen mesaj en üstte görünmektedir.
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Ad-Soyad</th>
                                <th>Mail</th>
                                <th>İşlem Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $key=>$value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }} {{ $value->surname }} </td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.show', ['contact' => $value]) }}" class="btn btn-primary btn-sm">Gör</a>
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
