@extends('layouts.main')

@section('title', 'Dashboard Admin')

@section('content-header')
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Dashboard</div>
    </div>
@endsection

@section('content-body')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengguna</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_user }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Penduduk</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_penduduk }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pendapatan</h4>
                    </div>
                    <div class="card-body">
                         @currency($total_pendapatan)
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Mata Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_mapel }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Berita</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_berita }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-images"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Galeri</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_galeri }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Saran</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_saran }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-gear"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Setting</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_setting }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                <div class="header-title">
                                    <h4 class="card-title">Daily Access (Last 30 Days)</h4>
                                </div>
                            </div>
                            <div class="card-body" style="height: 350px">
                                <canvas id="chart-daily-access"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                <div class="header-title">
                                    <h4 class="card-title">Top Device</h4>
                                </div>
                            </div>
                            <div class="card-body" style="height: 350px">
                                <canvas id="chart-top-device"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card" data-aos="fade-up" data-aos-delay="800">
                                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                                        <div class="header-title">
                                            <h4 class="card-title">Top Page</h4>
                                        </div>
                                    </div>
                                    <div class="card-body" style="height: 500px">
                                        <canvas id="chart-top-page"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script>
        // access daily
        document.addEventListener('DOMContentLoaded', function() {
            // Prepare data
            var labels = @json(array_column($accessDaily, 'dates'));
            var data = @json(array_column($accessDaily, 'count'));

            // Chart
            new Chart('chart-daily-access', {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(7,65,115,1.0)",
                        borderColor: "rgba(7,65,115,0.1)",
                        data: data,
                        label: 'Total Count'
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    responsive: true,
                    maintainAspectRatio: false
                },
            });
        });

        // top page
        document.addEventListener('DOMContentLoaded', function() {
            // Prepare data
            var labels = @json(array_column($topPages, 'path'));
            var data = @json(array_column($topPages, 'total'));

            // Chart
            new Chart('chart-top-page', {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        label: 'Total Count',
                        backgroundColor: 'rgb(215,75,118)'
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false,
                            position: 'bottom'
                        },
                    },
                    responsive: true,
                    maintainAspectRatio: false
                },
            });
        });

        // top device
        document.addEventListener('DOMContentLoaded', function() {
            // Prepare data
            var labels = ['Desktop', 'Mobile', 'Tablet'];
            var data = [@json($queryDesktop), @json($queryMobile), @json($queryTablet)];

            // Chart
            new Chart('chart-top-device', {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        label: 'Total Count',
                        backgroundColor: [
                            'rgb(243,206,123)',
                            'rgb(19,170,185)',
                            'rgb(240,130,95)'
                        ],
                        datalabels: {
                            anchor: 'center',
                            backgroundColor: null,
                            borderWidth: 0
                        }
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                    },
                    responsive: true,
                    maintainAspectRatio: false
                },
            });
        });
    </script>
@endsection
