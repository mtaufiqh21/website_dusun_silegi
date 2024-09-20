@extends('layouts.main')

@section('title', 'Edit Setting')

@section('content-header')
    <h1>Edit Setting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Setting</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="key">Key</label>
                        <h3>{{ $setting->key }}</h3>
                    </div>

                    @if ($setting->type === 'longtext')
                        <div class="col-lg-12">
                            <label for="value">Value</label>
                            <textarea style="display: none;" id="value" type="text" class="form-control @error('value') is-invalid @enderror"
                                name="value">{{ $setting->value }}</textarea>
                            <textarea name="description_long" id="description_long" cols="30" rows="10">{{ $setting->value }}</textarea>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <label for="value">Value</label>
                            <input type="text" class="form-control @error('value') is-invalid @enderror" name="value"
                                value="{{ $setting->value }}"">
                        </div>
                    @endif

                    <div class="col-lg-12">
                        <label for="active_status">ACTIVE STATUS</label>
                        <h3>{{ $setting->active_status }}</h3>
                    </div>
                    <div class="modal-footer">
                    <a class="btn btn-primary" href="{{ route('setting.index') }}">Kembali ke Daftar Setting</a>
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
                    $('#value').val(ed.getContent());
                });
            }
        });
    </script>
@endsection
