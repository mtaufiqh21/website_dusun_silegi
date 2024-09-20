@extends('layouts.main')

@section('title', 'Dashboard User')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

@section('content-header')
    <h1>User</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">User</div>
    </div>
@endsection

@section('content-body')
    <div class="col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Seluruh Data User</h4>
            </div>
            <div class="card-body p-0">
                <p class="px-4">Berikut adalah daftar seluruh User.</p>
                {{-- id add akan di tangkap jqeury untuk membuat modal
                cek di bootstrap-modal.js --}}
                <div class="m-3 d-flex align-items-center justify-content-end">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add">Add User</button>
                </div>
                <div class="table-responsive">
                    {{-- <table class="table table-striped table-md">
                        <tr>
                            <th class="text-center">ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">
                                    {{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                @if ($user->active_status === 1)
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                @else
                                    <td>
                                        <div class="badge badge-danger">Not Active</div>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true">Delete
                                    </a>
                                    <button class="btn btn-info" data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}" data-email="{{ $user->email }}"
                                        data-role_id="{{ $user->role_id }}" data-status="{{ $user->active_status }}"
                                        data-created_at="{{ $user->created_at }}"
                                        data-updated_at="{{ $user->updated_at }}" data-toggle="modal"
                                        data-target="#detailModel">Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </table> --}}
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center !important;">ID</th>
                                <th style="text-align: center !important;">NAME</th>
                                <th style="text-align: center !important;">EMAIL</th>
                                <th style="text-align: center !important;">ROLE</th>
                                <th style="text-align: center !important;">STATUS</th>
                                <th style="text-align: center !important;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr style="text-align: center !important;">
                                <td style="text-align: center !important;">
                                    {{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                @if ($user->active_status === 1)
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                @else
                                    <td>
                                        <div class="badge badge-danger">Not Active</div>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true">Delete
                                    </a>
                                    <button class="btn btn-info" data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}" data-email="{{ $user->email }}"
                                        data-role_id="{{ $user->role_id }}" data-status="{{ $user->active_status }}"
                                        data-created_at="{{ $user->created_at }}"
                                        data-updated_at="{{ $user->updated_at }}" data-toggle="modal"
                                        data-target="#detailModel">Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    {{-- modal create user --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">PASSWORD</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">NAME</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="role">ROLE</label>
                                        <select class="form-control" name="role_id" id="role_id">
                                            <option value="1">Admin</option>
                                            <option value="2">Teacher</option>
                                            <option value="3">Student</option>
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

    {{-- modal detail user --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="detailModel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- form untuk update --}}
                {{-- param ke 2 dari route itu cuma data fake agar method update di controller tidak eror,
                karena kita kirim id nya dari input hidden id dan value id ini di ambil lewat javascript --}}
                <form action="{{ route('user.update', 'fake') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="id">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">NAME</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="role_id">ROLE</label>
                                        <select class="form-control @error('role') is-invalid @enderror" name="role_id"
                                            id="role_id">
                                            <option value="1">Admin</option>
                                            <option value="2">Teacher</option>
                                            <option value="3">Student</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status">STATUS</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="1">Active</option>
                                            <option value="2">Not Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="created_at">DI BUAT</label>
                                        <input type="datetime-local" class="form-control" id="created_at"
                                            name="created_at" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="updated_at">DI UPDATE</label>
                                        <input type="datetime-local" class="form-control" id="updated_at"
                                            name="updated_at" readonly>
                                    </div>
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

@section('js')
    {{-- jQuery untuk ambil data guru dari database dan mengirim ke class modal-body --}}
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable();
    </script>
@endsection
