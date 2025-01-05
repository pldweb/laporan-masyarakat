@extends('layouts.master')
@section('content')

    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">
                        @foreach($indicatorMenu as $item)
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">{{$item['title']}}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="truck"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">{{$item['number']}}</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>{{$item['report_percentage']}}% </span>
                                            <span class="text-muted">{{$item['time']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Grafik Pengaduan Masyarakat</h5>
                    </div>
                    <div class="card-body py-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-7 col-xxl-7 d-flex order-1">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Lokasi Pengaduan Terbanyak</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="world_map" style="height:350px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-xxl-5 d-flex order-2">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Kalender</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
