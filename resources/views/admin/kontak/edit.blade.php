@extends('layouts.main')

@section('title', 'Edit Kontak')

@section('content-header')
    <h1>Edit Kontak</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Kontak</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('kontak.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $contact->name }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="position">Posisi</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" name="position"
                            value="{{ $contact->position }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="phone_number">Nomor Handphone</label>
                        <input id="phone_number" type="number"
                            class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                            value="{{ $contact->phone_number }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="job_description">DESKRIPSI PEKERJAAN</label>
                        <input type="text" class="form-control @error('job_description') is-invalid @enderror"
                            name="job_description" value="{{ $contact->job_description }}"">
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">Active Status</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $contact->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $contact->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ route('kontak.index') }}">Kembali ke Daftar Kontak</a>
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

        // handle wysiwyg
        tinymce.init({
            selector: 'textarea#description_long',
            plugins: 'code table lists image imagetools',
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager | print preview media | forecolor backcolor emoticons | codesample",
            promotion: false,
            file_picker_callback: function(callback, value, meta) {
                // Kustomisasi file picker callback untuk mengunggah gambar
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        callback(e.target.result, {
                            alt: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
            setup: function(ed) {
                ed.on('change', function(e) {
                    $('#long_description').val(ed.getContent());
                });
            }
        });
    </script>
@endsection
