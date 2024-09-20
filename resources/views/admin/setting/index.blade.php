@extends('layouts.main')

@section('title', 'Dashboard Setting')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>Setting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Setting</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data Setting</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh Setting.</p>
                <div class="table-responsive">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">

                                <button type="button" class="close" data-dismiss="alert">X</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    {{-- <table class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Type</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $item)
                                <tr style="text-align: center;">
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->key }} </td>
                                    <td> {{ $item->value }} </td>
                                    <td> {{ $item->type }} </td>
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
                                        <a href="{{ route('setting.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('setting.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">KEY</th>
                                <th style="text-align: center !important;">VALUE</th>
                                <th style="text-align: center !important;">TYPE</th>
                                <th style="text-align: center !important;">STATUS</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $item)
                                <tr style="text-align: center !important;">
                                    <td style="text-align: center !important;"> {{ $item->id }} </td>
                                    <td> {{ $item->key }} </td>
                                    <td> {{ $item->value }} </td>
                                    <td> {{ $item->type }} </td>
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
                                        <a href="{{ route('setting.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('setting.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{-- {{$teachers->links()}} --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable();

        $(document).ready(function() {
            $(".alert .close").on("click", function() {
                $(this).parent(".alert").fadeOut();
            });
        });
    </script>
@endsection
