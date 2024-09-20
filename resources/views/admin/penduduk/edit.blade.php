@extends('layouts.main')

@section('title', 'Edit Penduduk')

@section('content-header')
    <h1>Edit Penduduk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Penduduk</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('penduduk.update', $villager->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="nik">Nomor Induk Kependudukan | NIK</label>
                        <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik"
                            value="{{ $villager->nik }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $villager->name }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $villager->email }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="phone_number">Nomor Handphone</label>
                        <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                            value="{{ $villager->phone_number }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ $villager->address }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="Pria" {{ $villager->gender === 'Pria' ? 'selected' : '' }}>Pria
                            </option>
                            <option value="Wanita" {{ $villager->gender === 'Wanita' ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="file">File Lampiran</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                            id="file" accept=".pdf, .doc, .docx">
                        <h4>{{ $villager->identity_card }}</h4>
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">Active Status</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $villager->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0"
                                {{ $villager->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('penduduk.index') }}">Kembali ke Daftar Berita</a>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#file').change(function() {
            var fileInput = $(this);
            var file = fileInput.prop('files')[0];
            var validFileTypes = ['application/pdf', 'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ];

            if (file && !validFileTypes.includes(file.type)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid File',
                    text: 'Hanya file PDF dan DOC yang diperbolehkan.',
                    confirmButtonColor: '#3A57E8'
                });
                fileInput.val('');
                return;
            }
        });
    </script>
@endsection
