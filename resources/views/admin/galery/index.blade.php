@extends('layouts.main')

@section('title', 'Dashboard Galeri')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>Galeri</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Galeri</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data Galeri</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh Galeri.</p>
                {{-- id add akan di tangkap jqeury untuk membuat modal
                cek di bootstrap-modal.js --}}
                <div class="m-3 d-flex align-items-center justify-content-end">
                    <a href="{{ route('galery.create') }}" class="btn btn-success">Tambah Galeri</a>
                </div>
                <div class="table-responsive">
                    {{-- <table class="table table-striped table-md">
                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">

                                    <button type="button" class="close" data-dismiss="alert">X</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMAGE</th>
                                <th>DESCRIPTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeries as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td><img src="{{ asset($item->image) }}" width="50" height="50"
                                            alt="{{ $item->title }}"></td>
                                    <td> {{ $item->description }} </td>
                                    @if ($item->active_status === 1)
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-danger">Not Active</div>
                                        </td>
                                    @endif
                                    <td>
                                        <form action="{{ route('galery.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('galery.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('galery.show', $item->id) }}" class="btn btn-info">Detail</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">IMAGE NAME</th>
                                <th style="text-align: center !important;">IMAGE</th>
                                <th style="text-align: center !important;">DESCRIPTION</th>
                                <th style="text-align: center !important;">STATUS</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeries as $item)
                                <tr style="text-align: center !important;">
                                    <td style="text-align: center !important;"> {{ $item->id }} </td>
                                    <td>{{ $item->image_name }}</td>
                                    <td><img src="{{ asset($item->image) }}" width="50" height="50"
                                            alt="{{ $item->title }}"></td>
                                    <td> {{ $item->description }} </td>
                                    @if ($item->active_status === 1)
                                        <td>
                                            <div class="badge badge-success">Active</div>
                                        </td>
                                    @else
                                        <td>
                                            <div class="badge badge-danger">Not Active</div>
                                        </td>
                                    @endif
                                    <td>
                                        <form action="{{ route('galery.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('galery.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('galery.show', $item->id) }}" class="btn btn-info">Detail</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
            </div>
        </div>
    </div>
@endsection

{{-- @section('modal')
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('galery.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="description">DESKRIPSI</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="description" value="{{ old('description') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="image">Upload Gambar</label>
                                        <input class="form-control" accept="image/*" type="file" id="image"
                                            name="image" required>
                                        <img src="X" id="category-img-tag" width="200px" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="active_status">ACTIVE STATUS</label>
                                    <select class="form-control" name="active_status">
                                        <option value=1>Active</option>
                                        <option value=0>Not Active</option>
                                    </select>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="detailModel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
@endsection --}}

{{-- jQuery untuk ambil data guru dari database dan mengirim ke class modal-body --}}
@section('js')
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $(".alert .close").on("click", function() {
                $(this).parent(".alert").fadeOut();
            });
        });
    </script>
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
