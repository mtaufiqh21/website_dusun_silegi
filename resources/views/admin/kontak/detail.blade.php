@extends('layouts.main')

@section('title', 'Detail Kontak')

@section('content-header')
    <h1>Detail Kontak</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kontak</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="name">Nama</label>
                    <h3>{{ $contact->name }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="position">Posisi</label>
                    <h3>{{ $contact->position }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="phone_number">Nomor Handphone</label>
                    <h3>{{ $contact->phone_number }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="job_description">Deskripsi Pekerjaan</label>
                    <h3>{{ $contact->job_description }}</h3>
                </div>
                <div class="col-lg-12">
                    @if ($contact->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('kontak.index') }}">Kembali ke Daftar Kontak</a>
                </div>
            </div>
        </div>
    </div>

@endsection
