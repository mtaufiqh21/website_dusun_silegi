@extends('layouts.main')

@section('title', 'Edit Data Kematian')

@section('content-header')
    <h1>Edit Data Kematian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Data Kematian</div>
    </div>
@endsection

@section('content-body')

    <div class="col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('datakematian.update', $dataKematian->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="no_kk">Nomor Kartu Keluarga</label>
                        <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk"
                            value="{{ $dataKematian->no_kk }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror"
                            name="nama_kepala_keluarga" value="{{ $dataKematian->nama_kepala_keluarga }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_mati">NIK Mati</label>
                        <input type="number" class="form-control @error('nik_mati') is-invalid @enderror" name="nik_mati"
                            value="{{ $dataKematian->nik_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nama_mati">Nama Mati</label>
                        <input type="text" class="form-control @error('nama_mati') is-invalid @enderror" name="nama_mati"
                            value="{{ $dataKematian->nama_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Pria" {{ $dataKematian->jenis_kelamin === 'Pria' ? 'selected' : '' }}>Pria
                            </option>
                            <option value="Wanita" {{ $dataKematian->jenis_kelamin === 'Wanita' ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                            value="{{ $dataKematian->tgl_lahir }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="tempat_kelahiran">Tempat Kelahiran</label>
                        <input type="text" class="form-control @error('tempat_kelahiran') is-invalid @enderror"
                            name="tempat_kelahiran" value="{{ $dataKematian->tempat_kelahiran }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="agama_mati">Agama Mati</label>
                        <input type="text" class="form-control @error('agama_mati') is-invalid @enderror"
                            name="agama_mati" value="{{ $dataKematian->agama_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="pekerjaan_mati">Pekerjaan Mati</label>
                        <input type="text" class="form-control @error('pekerjaan_mati') is-invalid @enderror"
                            name="pekerjaan_mati" value="{{ $dataKematian->pekerjaan_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="alamat_mati">Alamat Mati</label>
                        <input type="text" class="form-control @error('alamat_mati') is-invalid @enderror"
                            name="alamat_mati" value="{{ $dataKematian->alamat_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="tgl_mati">Tanggal Mati</label>
                        <input type="date" class="form-control @error('tgl_mati') is-invalid @enderror" name="tgl_mati"
                            value="{{ $dataKematian->tgl_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="pukul_mati">Pukul Mati</label>
                        <input type="time" class="form-control @error('pukul_mati') is-invalid @enderror"
                            name="pukul_mati" value="{{ $dataKematian->pukul_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="sebab">Sebab Kematian</label>
                        <input type="text" class="form-control @error('sebab') is-invalid @enderror" name="sebab"
                            value="{{ $dataKematian->sebab }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="tempat_mati">Tempat Kematian</label>
                        <input type="text" class="form-control @error('tempat_mati') is-invalid @enderror"
                            name="tempat_mati" value="{{ $dataKematian->tempat_mati }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="yang_menerangkan">Yang Menerangkan</label>
                        <input type="text" class="form-control @error('yang_menerangkan') is-invalid @enderror"
                            name="yang_menerangkan" value="{{ $dataKematian->yang_menerangkan }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_ibu">NIK Ibu</label>
                        <input type="number" class="form-control @error('nik_ibu') is-invalid @enderror" name="nik_ibu"
                            value="{{ $dataKematian->nik_ibu }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_ayah">NIK Ayah</label>
                        <input type="number" class="form-control @error('nik_ayah') is-invalid @enderror"
                            name="nik_ayah" value="{{ $dataKematian->nik_ayah }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_pelapor">NIK Pelapor</label>
                        <input type="number" class="form-control @error('nik_pelapor') is-invalid @enderror"
                            name="nik_pelapor" value="{{ $dataKematian->nik_pelapor }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_saksisatu">NIK Saksi 1</label>
                        <input type="number" class="form-control @error('nik_saksisatu') is-invalid @enderror"
                            name="nik_saksisatu" value="{{ $dataKematian->nik_saksisatu }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="nik_saksidua">NIK Saksi 2</label>
                        <input type="number" class="form-control @error('nik_saksidua') is-invalid @enderror"
                            name="nik_saksidua" value="{{ $dataKematian->nik_saksidua }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="file">File Lampiran</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                            id="file" accept=".pdf, .doc, .docx">
                        <h4>{{ $dataKematian->nama_lampiran }}</h4>
                    </div>
                    <div class="col-lg-12">
                        <label for="verifikasi">Status Verifikasi</label>
                        <select class="form-control" name="verifikasi" id="verifikasi">
                            <option value="Verifikasi" {{ $dataKematian->verifikasi === 'Verifikasi' ? 'selected' : '' }}>
                                Verifikasi</option>
                            <option value="Belum Verifikasi"
                                {{ $dataKematian->verifikasi === 'Belum Verifikasi' ? 'selected' : '' }}>Belum Verifikasi
                            </option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('datakematian.index') }}">Kembali ke Daftar Berita</a>
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
