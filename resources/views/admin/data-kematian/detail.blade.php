@extends('layouts.main')

@section('title', 'Detail Data Kematian')

@section('content-header')
    <h1>Detail Data Kematian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Kematian</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="no_kk">Nomor Kartu Keluarga</label>
                    <h3>{{ $dataKematian->no_kk }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                    <h3>{{ $dataKematian->nama_kepala_keluarga }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_mati">NIK Mati</label>
                    <h3>{{ $dataKematian->nik_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nama_mati">Nama Mati</label>
                    <h3>{{ $dataKematian->nama_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <h3>{{ $dataKematian->jenis_kelamin }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <h3>{{ $dataKematian->tgl_lahir }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="tempat_kelahiran">Tempat Kelahiran</label>
                    <h3>{{ $dataKematian->tempat_kelahiran }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="agama_mati">Agama Mati</label>
                    <h3>{{ $dataKematian->agama_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="pekerjaan_mati">Pekerjaan Mati</label>
                    <h3>{{ $dataKematian->pekerjaan_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="alamat_mati">Alamat Mati</label>
                    <h3>{{ $dataKematian->alamat_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="tgl_mati">Tanggal Mati</label>
                    <h3>{{ $dataKematian->tgl_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="pukul_mati">Pukul Mati</label>
                    <h3>{{ $dataKematian->pukul_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="sebab">Sebab Kematian</label>
                    <h3>{{ $dataKematian->sebab }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="tempat_mati">Tempat Mati</label>
                    <h3>{{ $dataKematian->tempat_mati }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="yang_menerangkan">Yang Menerangkan</label>
                    <h3>{{ $dataKematian->yang_menerangkan }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_ibu">NIK Ibu</label>
                    <h3>{{ $dataKematian->nik_ibu }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_ayah">NIK Ayah</label>
                    <h3>{{ $dataKematian->nik_ayah }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_pelapor">NIK Pelapor</label>
                    <h3>{{ $dataKematian->nik_pelapor }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_saksisatu">NIK Saksi 1</label>
                    <h3>{{ $dataKematian->nik_saksisatu }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nik_saksidua">NIK Saksi 1</label>
                    <h3>{{ $dataKematian->nik_saksidua }}</h3>
                </div>
                <div class="col-lg-12">
                    <label for="nama_lampiran">Lampiran</label>
                    <h3>{{ $dataKematian->nama_lampiran }}</h3>
                    <a href="{{ route('datakematian.download', $dataKematian) }}"
                        class="btn btn-sm btn-success">Download</a>
                </div>
                <div class="col-lg-12">
                    <label for="verifikasi">Status Verifikasi</label>
                    <h3>{{ $dataKematian->verifikasi }}</h3>
                </div>
                <div class="col-lg-12 pt-3">
                    <a class="btn btn-primary" href="{{ route('datakematian.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
    </div>

@endsection
