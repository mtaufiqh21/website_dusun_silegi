<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKematian extends Model
{
    use HasFactory;

    protected $table = "data_kematians";

    protected $fillable = [
        "no_kk",
        "nama_kepala_keluarga",
        "nik_mati",
        "nama_mati",
        "jenis_kelamin",
        "tgl_lahir",
        "tempat_kelahiran",
        "agama_mati",
        "pekerjaan_mati",
        "alamat_mati",
        "tgl_mati",
        "pukul_mati",
        "sebab",
        "tempat_mati",
        "yang_menerangkan",
        "nik_ibu",
        "nik_ayah",
        "nik_pelapor",
        "nik_saksisatu",
        "nik_saksidua",
        'nama_lampiran',
        'nama_lampiran_ubah',
        "verifikasi",
    ];
}
