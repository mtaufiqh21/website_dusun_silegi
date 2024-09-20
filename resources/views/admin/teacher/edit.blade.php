@extends('layouts.main')

@section('title', 'Edit Guru')

@section('content-header')
    <h1>Edit Guru</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Guru</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name">name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $teacher->name }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Upload Gambar</label>
                        <input class="form-control" accept="image/*" type="file" id="image" name="image">
                        <img src="{{ asset($teacher->image) }}" id="category-img-tag" width="200px" />
                        {{-- <img src="{{ $teacher->image ? asset('storage/images/' . $teacher->image) : asset('images/noimage.jpg') }}"
                             id="image-preview" name="image-preview" width="300px" style="border-radius: 2%;"> --}}
                    </div>
                    <div class="col-lg-12">
                        <label for="nip">NIP</label>
                        <input id="nip" type="number"
                            class="form-control @error('nip') is-invalid @enderror" name="nip"
                            value="{{ $teacher->nip }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $teacher->email }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="position_category">Kategori Posisi</label>
                        <select class="form-control" name="position_category">
                            <option value="Kepala Sekolah" {{ $teacher->position_category === "Kepala Sekolah" ? 'selected' : '' }}>Kepala Sekolah</option>
                            <option value="Guru" {{ $teacher->position_category === "Guru" ? 'selected' : '' }}>Guru</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="position">Position</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror"
                            name="position" value="{{ $teacher->position }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="gender">JENIS KELAMIN</label>
                        <select class="form-control" name="gender">
                            <option value="Pria" {{ $teacher->gender === "Pria" ? 'selected' : '' }}>Pria</option>
                            <option value="Wanita" {{ $teacher->gender === "Wanita" ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">ACTIVE STATUS</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $teacher->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $teacher->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('teacher.index') }}" class="btn btn-primary">Kembali ke Daftar Guru</a>
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
