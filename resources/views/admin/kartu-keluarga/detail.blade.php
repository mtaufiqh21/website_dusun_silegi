@extends('layouts.main')

@section('title', 'Detail Kartu Keluarga')

@section('content-header')
    <h1>Detail Kartu Keluarga</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kartu Keluarga</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label class="h4" for="no_kk">Nomor Kartu Keluarga</label>
                    <h4>{{ $familyCard->no_kk }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="name">Nama</label>
                    <h4>{{ $familyCard->name }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="address">Alamat</label>
                    <h4>{{ $familyCard->address }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="phone_number">Nomor Handphone</label>
                    <h4>{{ $familyCard->phone_number }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="family_card_identity">Bukti Kartu Keluarga</label>
                    <h4>{{ $familyCard->family_card_identity }}</h4>
                    <a href="{{ route('kartu-keluarga.download', $familyCard) }}"
                    class="btn btn-sm btn-success">Download</a>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="wilayah">Wilayah</label>
                    <h4>{{ $familyCard->wilayah }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="rt">RT</label>
                    <h4>{{ $familyCard->rt }}</h4>
                </div>
                <div class="col-lg-12">
                    <label class="h4" for="rw">RW</label>
                    <h4>{{ $familyCard->rw }}</h4>
                </div>
                <div class="col-lg-12">
                    @if ($familyCard->active_status === 1)
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
                    <a class="btn btn-primary" href="{{ route('kartu-keluarga.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>

@endsection
