@extends('layouts.main')

@section('title', 'Dashboard Kontak')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>Kontak</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kontak</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data Berita</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh Berita.</p>
                <div class="m-3 d-flex align-items-center justify-content-end">
                    <a href="{{ route('kontak.create') }}" class="btn btn-success">Tambah Berita</a>
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
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>SLUG</th>
                                <th>POSTING DATE</th>
                                <th>IMAGE</th>
                                <th>SHORT DESCRIPTION</th>
                                <th>LONG DESCRIPTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Kontak as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->title }} </td>
                                    <td> {{ $item->slug }} </td>
                                    <td> {{ $item->posting_date }} </td>
                                    <td><img src="{{ asset($item->image) }}" width="50" height="50"
                                            alt="{{ $item->title }}"></td>
                                    <td> {{ $item->short_description }} </td>
                                    <td style="word-break: break-all;"> {!! $item->long_description !!} </td>
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
                                        <form action="{{ route('Kontak.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
                                        </form>
                                        <a href="{{ route('Kontak.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('Kontak.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">NAMA</th>
                                <th style="text-align: center !important;">POSISI</th>
                                <th style="text-align: center !important;">ALAMAT</th>
                                <th style="text-align: center !important;">NO HP</th>
                                <th style="text-align: center !important;">DESKRIPSI</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                                <tr style="text-align: center !important;">
                                    <td style="text-align: center !important;"> {{ $item->id }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->position }} </td>
                                    <td> {{ $item->address }} </td>
                                    {{-- <td><img src="{{ asset($item->identity_card) }}" width="50" height="50"
                                            alt="{{ $item->name }}"></td> --}}
                                    <td style="text-align: center !important;"> {{ $item->phone_number }} </td>
                                    <td> {{ $item->job_description }} </td>
                                    <td>
                                        {{-- <form action="{{ route('kontak.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
                                        </form> --}}
                                        <a href="{{ route('kontak.destroy', $item->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                        <a href="{{ route('kontak.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('kontak.show', $item->id) }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{-- {{$teachers->links()}} --}}
            </div>
        </div>
    </div>
@endsection

{{-- @section('modal')
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Kontak.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="title">TITLE</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="image">Upload Gambar</label>
                                        <input class="form-control" accept="image/*" type="file" id="image"
                                            name="image" required>
                                        <img src="X" id="category-img-tag" width="200px" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="posting_date">Tanggal Upload</label>
                                        <input id="posting_date" type="date"
                                            class="form-control @error('posting_date') is-invalid @enderror"
                                            name="posting_date" value="{{ old('posting_date') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="short_description">DESKRIPSI SINGKAT</label>
                                        <input type="text"
                                            class="form-control @error('short_description') is-invalid @enderror"
                                            name="short_description" value="{{ old('short_description') }}"">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="long_description">DESKRIPSI PANJANG</label>
                                        <textarea type="text" class="form-control @error('long_description') is-invalid @enderror" name="long_description"
                                            value="{{ old('long_description') }}""></textarea>
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
@endsection --}}

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
    <script>
        $(document).ready(function() {
            $(".alert .close").on("click", function() {
                $(this).parent(".alert").fadeOut();
            });
        });
    </script>
@endsection
