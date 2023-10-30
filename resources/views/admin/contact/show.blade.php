@extends('admin.layouts.app')
@section('title', 'Mesaj Ayrıntıları')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Mesaj Ayrıntıları</h4>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Ad-Soyad:</label>

                                <a href="#">{{ $contact->name.' '.$contact->surname }}</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Telefon:</label>
                                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <p>
                                    {{ $contact->message }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
