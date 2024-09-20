@extends('layouts.main')

@section('title', 'Detail Produk Dusun')

@section('content-header')
    <h1>Detail Produk Dusun</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Produk Dusun</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="owner">Pemilik</label>
                    <h3>{{ $product->owner }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="title">Title</label>
                    <h3>{{ $product->title }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="phone_number">Nomor Handphone</label>
                    <h3>{{ $product->phone_number }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="image">Image</label>
                    <p>
                        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="25%" height="25%">
                    </p>
                </div>
                <div class="col-lg-12">
                    <label for="short_description">Deskripsi Singkat</label>
                    <h3>{{ $product->short_description }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="price">Harga</label>
                    <h3>{{ $product->price }}</h3>
                </div>
                <div class="col-lg-12">
                    @if ($product->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('produk-dusun.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>

@endsection
