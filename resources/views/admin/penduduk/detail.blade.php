@extends('layouts.main')

@section('title', 'Detail Penduduk')

@section('content-header')
    <h1>Detail Penduduk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Penduduk</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="nik">Nomor Induk Kependudukan | NIK</label>
                    <h3>{{ $villager->nik }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="name">Nama</label>
                    <h3>{{ $villager->name }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="email">Email</label>
                    <h3>{{ $villager->email }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="Identity_card">KTP</label>
                    <h3>{{ $villager->identity_card }}</h3>
                    <a href="{{ route('penduduk.download', $villager) }}"
                    class="btn btn-sm btn-success">Download</a>
                </div>
                <div class="col-lg-12">
                    <label for="phone_number">Nomor Handphone</label>
                    <h3>{{ $villager->phone_number }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="alamat">Alamat</label>
                    <h3>{{ $villager->alamat }}</h3>
                </div>
                <div class="col-lg-12">
                    @if ($villager->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('penduduk.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>

@endsection
