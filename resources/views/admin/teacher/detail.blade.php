@extends('layouts.main')

@section('title', 'Detail Guru')

@section('content-header')
    <h1>Detail Guru</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Guru</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="name">name</label>
                    <h3>{{ $teacher->name }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="NIP">NIP</label>
                    <p>
                        <span>{{ $teacher->NIP }}</span>
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="image">Image</label>
                    <p>
                        <img src="{{ $teacher->image }}" alt="{{ $teacher->name }}" width="25%" height="25%">
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="email">Email</label>
                    <h3>{{ $teacher->email }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="position_category">Kategori Posisi</label>
                    <p>{{ $teacher->position_category }}</p>
                </div>
                <div class="col-lg-12">
                    <label for="position">Posisi</label>
                    <p>{{ $teacher->position }}</p>
                </div>
                <div class="col-lg-12">
                    <label for="gender">Gender</label>
                    <p>{{ $teacher->gender }}</p>
                </div>
                <div class="col-lg-12">
                    @if ($teacher->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('teacher.index') }}">Kembali ke Daftar Guru</a>
                </div>
            </div>
        </div>
    </div>

@endsection
