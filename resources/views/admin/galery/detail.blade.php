@extends('layouts.main')

@section('title', 'Detail Galeri')

@section('content-header')
    <h1>Detail Galeri</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Galeri</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="image_name">Image Name</label>
                    <h4>{{ $galeries->image_name }}</h4>
                </div>
                <div class="col-lg-12">
                    <label for="description">Deskripsi</label>
                    <h4>{{ $galeries->description }}</h4>
                </div>
                <div class="col-lg-12">
                    <label for="image">Image</label>
                    <p>
                        <img src="{{ asset($galeries->image) }}" alt="Image" style="width: 50%;">
                    </p>
                </div>
                <div class="col-lg-12">
                    @if ($galeries->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('galery.index') }}">Kembali ke Daftar Galeri</a>
                </div>
            </div>
        </div>
    </div>

@endsection
