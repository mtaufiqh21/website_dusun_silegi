@extends('layouts.main')

@section('title', 'Detail News')

@section('content-header')
    <h1>Detail News</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">News</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="author">Penulis</label>
                    <h1>{{ $news->author }}</h1>
                </div>
                <div class="col-lg-12">
                    <label for="title">Title</label>
                    <h1>{{ $news->title }}</h1>
                </div>
                <div class="col-lg-12">
                    <label for="posting_date">Posting Date</label>
                    <p>
                        <span>{{ $news->posting_date }}</span>
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="image">Image</label>
                    <p>
                        <img src="{{ $news->image }}" alt="{{ $news->title }}" width="25%" height="25%">
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="short_description">Deskripsi Singkat</label>
                    <h3>{{ $news->short_description }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="long_description">Deskripsi Panjang</label>
                    <p>{!! $news->long_description !!}</p>
                </div>
                <div class="col-lg-12">
                    @if ($news->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('news.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>

@endsection
