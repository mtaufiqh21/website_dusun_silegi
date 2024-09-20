@extends('layouts.main')

@section('title', 'Detail Kotak Saran')

@section('content-header')
    <h1>Detail Kotak Saran</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kotak Saran</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="name">Nama</label>
                    <h4>{{ $suggest->name }}</h4>
                </div>
                <div class="col-lg-12">
                    <label for="email">Email</label>
                    <p>
                        <h4>{{ $suggest->email }}</h4>
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="phone_number">Nomor HP</label>
                    <h3>{{ $suggest->phone_number }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="suggestion">Saran</label>
                    <h4>{{ $suggest->suggestion }}</h4>
                </div>
                <div class="col-lg-12">
                    @if ($suggest->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('suggest.index') }}">Kembali ke Daftar Kotak Saran</a>
                </div>
            </div>
        </div>
    </div>

@endsection
