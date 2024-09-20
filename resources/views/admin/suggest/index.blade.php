@extends('layouts.main')

@section('title', 'Dashboard Kotak Saran')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>Kotak Saran</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kotak Saran</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data Kotak Saran</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh Kotak Saran.</p>
                {{-- id add akan di tangkap jqeury untuk membuat modal
                cek di bootstrap-modal.js --}}
                <div class="table-responsive">
                    {{-- <table class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE NUMBER</th>
                                <th>SUGGESTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suggest as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->email }} </td>
                                    <td> {{ $item->phone_number }} </td>
                                    <td> {{ $item->suggestion }} </td>
                                    @if ($item->active_status === 1)
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-danger">Not Active</div>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="" class="btn btn-danger" data-confirm-delete="true">Delete
                                        </a>
                                        <a href="{{ route('suggest.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">NAME</th>
                                <th style="text-align: center !important;">EMAIL</th>
                                <th style="text-align: center !important;">PHONE NUMBER</th>
                                <th style="text-align: center !important;">SUGGEST</th>
                                <th style="text-align: center !important;">STATUS</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suggest as $item)
                                <tr style="text-align: center !important;">
                                    <td style="text-align: center !important;"> {{ $item->id }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->email }} </td>
                                    <td style="text-align: center !important;"> {{ $item->phone_number }} </td>
                                    <td> {{ $item->suggestion }} </td>
                                    @if ($item->active_status === 1)
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-danger">Not Active</div>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="" class="btn btn-danger" data-confirm-delete="true">Delete
                                        </a>
                                        <a href="{{ route('suggest.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable();
    </script>
@endsection
