@extends('layouts.main')

@section('title', 'Edit Pendapatan')

@section('content-header')
    <h1>Edit Pendapatan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Pendapatan</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('pendapatan.update', $pendapatan->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="nominal_pendapatan">Nominal Pendapatan</label>
                        <input class="form-control type="number" id="dengan-rupiah" name="nominal_pendapatan" value="{{ $pendapatan->nominal_pendapatan }}" />
                    </div>
                    <div class="col-lg-12">
                        <label for="tahun">Tahun</label>
                        <input id="tahun" type="number"
                            class="form-control @error('tahun') is-invalid @enderror" name="tahun"
                            value="{{ $pendapatan->tahun }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">Active Status</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $pendapatan->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $pendapatan->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ route('pendapatan.index') }}">Kembali ke Daftar Pendapatan</a>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        /* Dengan Rupiah */
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection
