@extends('layouts.main')

@section('title', 'Edit Produk Dusun')

@section('content-header')
    <h1>Edit Produk Dusun</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Produk Dusun</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('produk-dusun.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="owner">Pemilik</label>
                        <input type="text" class="form-control @error('owner') is-invalid @enderror" name="owner"
                            value="{{ $product->owner }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="title">TITLE</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ $product->title }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Upload Gambar</label>
                        <input class="form-control" accept="image/*" type="file" id="image" name="image">
                        <img src="{{ asset($product->image) }}" id="category-img-tag" width="200px" />
                    </div>
                    <div class="col-lg-12">
                        <label for="phone_number">Nomor Handphone</label>
                        <input id="phone_number" type="number"
                            class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                            value="{{ $product->phone_number }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="short_description">DESKRIPSI SINGKAT</label>
                        <input type="text" class="form-control @error('short_description') is-invalid @enderror"
                            name="short_description" value="{{ $product->short_description }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="price">Harga</label>
                        <input class="form-control type="number" id="dengan-rupiah" name="price" value="{{ $product->price }}" />
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">ACTIVE STATUS</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $product->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $product->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('produk-dusun.index') }}">Kembali ke Daftar Berita</a>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script>
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
