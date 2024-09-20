@extends('layouts.main')

@section('title', 'Dashboard Guru')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>Guru</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Guru</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data Guru</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh guru.</p>
                {{-- id add akan di tangkap jqeury untuk membuat modal
                cek di bootstrap-modal.js --}}
                <div class="m-3 d-flex align-items-center justify-content-end">
                    <a href="{{ route('teacher.create') }}" class="btn btn-success">Add Guru</a>
                </div>
                <div class="table-responsive">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">

                                <button type="button" class="close" data-dismiss="alert">X</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    {{-- <table class="table table-striped table-md">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>NIP</th>
                            <th>IMAGE</th>
                            <th>EMAIL</th>
                            <th>KATEGORI POSISI</th>
                            <th>POSISI</th>
                            <th>GENDER</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->nip }}</td>
                                <td><img src="{{ asset($teacher->image) }}" width="50" height="50"
                                        alt="{{ $teacher->name }}"></td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->position_category }}</td>
                                <td>{{ $teacher->position }}</td>
                                <td>{{ $teacher->gender }}</td>
                                @if ($teacher->active_status === 1)
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                @else
                                    <td>
                                        <div class="badge badge-danger">Not Active</div>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{ route('teacher.destroy', $teacher->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true">Delete
                                    </a>
                                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">NAME</th>
                                <th style="text-align: center !important;">NIP</th>
                                <th style="text-align: center !important;">IMAGE</th>
                                <th style="text-align: center !important;">EMAIL</th>
                                <th style="text-align: center !important;">KATEGORI POSISI</th>
                                <th style="text-align: center !important;">POSISI</th>
                                <th style="text-align: center !important;">GENDER</th>
                                <th style="text-align: center !important;">STATUS</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center !important;">
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td style="text-align: center !important;">{{ $teacher->id }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->nip }}</td>
                                    <td><img src="{{ asset($teacher->image) }}" width="50" height="50"
                                            alt="{{ $teacher->name }}"></td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->position_category }}</td>
                                    <td>{{ $teacher->position }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    @if ($teacher->active_status === 1)
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-danger">Not Active</div>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="{{ route('teacher.destroy', $teacher->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true">Delete
                                        </a>
                                        <a href="{{ route('teacher.edit', $teacher->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $teachers->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    {{-- modal create teacher --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a New Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nip">nip</label>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                            name="nip" value="{{ old('nip') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="position_category">position_category</label>
                                        <select class="form-control" name="position_category">
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Guru">Guru</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="position">position</label>
                                        <input type="text" class="form-control @error('position') is-invalid @enderror"
                                            name="position" value="{{ old('position') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="image">Upload Gambar</label>
                                        <input class="form-control" accept="image/*" type="file" id="image"
                                            name="image" required>
                                        <img src="#" id="category-img-tag" width="200px" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">JENIS KELAMIN</label>
                                        <select class="form-control" name="gender">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="active_status">STATUS</label>
                                        <select class="form-control" name="active_status">
                                            <option value="1">Active</option>
                                            <option value="0">Not Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal detail teacher --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="detailModel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- form untuk update --}}
                {{-- param ke 2 dari route itu cuma data fake agar method update di controller tidak eror,
                karena kita kirim id nya dari input hidden id dan value id ini di ambil lewat javascript --}}
                <form action="{{ route('teacher.update', 'fake') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" name="teacher_id" id="id">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">NAME</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nip">NIP</label>
                                        <input type="number" class="form-control" id="nip" name="nip">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="education">PENDIDIKAN</label>
                                        <input type="text"
                                            class="form-control @error('education') is-invalid @enderror" name="education"
                                            id="education">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">JENIS KELAMIN</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="Pria">Laki-Laki</option>
                                            <option value="Wanita">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status">STATUS</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Active">Active</option>
                                            <option value="Not Active">Not Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="created_at">DI BUAT</label>
                                    <input type="datetime-local" class="form-control" id="created_at" name="created_at"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="updated_at">DI UPDATE</label>
                                    <input type="datetime-local" class="form-control" id="updated_at" name="updated_at"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- jQuery untuk ambil data guru dari database dan mengirim ke class modal-body --}}
@section('js')
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable();

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
