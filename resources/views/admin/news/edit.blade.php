@extends('layouts.main')

@section('title', 'Edit News')

@section('content-header')
    <h1>Edit News</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">News</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="author">PENULIS</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author"
                            value="{{ $news->author }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="title">TITLE</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            value="{{ $news->title }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Upload Gambar</label>
                        <input class="form-control" accept="image/*" type="file" id="image" name="image">
                        <img src="{{ asset($news->image) }}" id="category-img-tag" width="200px" />
                        {{-- <img src="{{ $news->image ? asset('storage/images/' . $news->image) : asset('images/noimage.jpg') }}"
                             id="image-preview" name="image-preview" width="300px" style="border-radius: 2%;"> --}}
                    </div>
                    <div class="col-lg-12">
                        <label for="posting_date">Tanggal Upload</label>
                        <input id="posting_date" type="date"
                            class="form-control @error('posting_date') is-invalid @enderror" name="posting_date"
                            value="{{ $news->posting_date }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="short_description">DESKRIPSI SINGKAT</label>
                        <input type="text" class="form-control @error('short_description') is-invalid @enderror"
                            name="short_description" value="{{ $news->short_description }}"">
                    </div>
                    <div class="col-lg-12">
                        <label for="long_description">DESKRIPSI PANJANG</label>
                        <textarea style="display: none;" id="long_description" type="text" class="form-control @error('long_description') is-invalid @enderror"
                            name="long_description">{{ $news->long_description }}</textarea>
                        <textarea name="description_long" id="description_long" cols="30" rows="10">{{ $news->long_description }}</textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="active_status">ACTIVE STATUS</label>
                        <select class="form-control" name="active_status" id="active_status">
                            <option value="1" {{ $news->active_status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $news->active_status === 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ route('news.index') }}">Kembali ke Daftar Berita</a>
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
