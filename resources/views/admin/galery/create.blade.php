@extends('layouts.main')

@section('title', 'Tambah Galeri')

@section('content-header')
    <h1>Tambah Galeri</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Galeri</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('galery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="image_name">Nama Image</label>
                        <input type="text" class="form-control @error('image_name') is-invalid @enderror"
                            name="image_name" value="">
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Upload Gambar</label>
                        <input class="form-control" accept="image/*" type="file" id="image" name="image">
                        <img src="#" id="category-img-tag" width="200px" />
                        {{-- <img src="{{ ->image ? asset('storage/images/' . ->image) : asset('images/noimage.jpg') }}"
                             id="image-preview" name="image-preview" width="300px" style="border-radius: 2%;"> --}}
                    </div>
                    <div class="col-lg-12">
                        <label for="description">DESKRIPSI</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" value="">
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">ACTIVE STATUS</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1">Active</option>
                            <option value="0">Not Active
                            </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('galery.index') }}">Kembali ke Daftar Galeri</a>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#category-img-tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endsection
