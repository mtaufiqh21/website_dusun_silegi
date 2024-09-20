@extends('layouts.main')

@section('title', 'Detail Pendapatan')

@section('content-header')
    <h1>Detail Pendapatan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Pendapatan</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label class="h4" for="nominal_pendapatan">Pendapatan</label>
                    <h4>{{ $pendapatan->nominal_pendapatan }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="tahun">Tahun</label>
                    <h4>{{ $pendapatan->tahun }}</h4>
                </div>
                <div class="col-lg-12">
                    @if ($pendapatan->active_status === 1)
                        <td>
                            <div class="badge badge-success">Active</div>
                        </td>
                    @else
                        <td>
                            <div class="badge badge-danger">Not Active</div>
                        </td>
                    @endif
                    <br>
                </div>
                <div class="col-lg-12 pt-3">
                    <a class="btn btn-primary" href="{{ route('pendapatan.index') }}">Kembali ke Daftar Pendapatan</a>
                </div>
            </div>
        </div>
    </div>

@endsection
