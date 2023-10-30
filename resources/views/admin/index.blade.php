@extends('admin.layouts.app')
@section('title', 'Anasayfa')
@section('content')


    <div class="row justify-content-center">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mt-0 mb-4">Toplam Hizmet Sayısı</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                   data-bgColor="#F9B9B9" value=" {{ $serviceCount }} "
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ $serviceCount }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mt-0 mb-4">Toplam Blog Sayısı</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                   data-bgColor="#FFE6BA" value=" {{ $blogCount }} "
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1">  {{ $blogCount }}  </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->
    <div class="row justify-content-center">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mt-0 mb-4">İletişime Geçen Kullanıcı Sayısı</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                   data-bgColor="#FFE6BA" value="{{ $contactCount }}"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ $contactCount }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>



@endsection
