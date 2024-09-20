<?php

namespace Database\Seeders;

use App\Models\DataKematian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DataKematianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataKematian::query()->create([
            "no_kk" => 321654789012345,
            "nama_kepala_keluarga" => "John Doe",
            "nik_mati" => 1234567890123,
            "nama_mati" => "John Doe",
            "jenis_kelamin" => "Laki-laki",
            "tgl_lahir" => "1990-01-01",
            "tempat_kelahiran" => "Jakarta",
            "agama_mati" => "Islam",
            "pekerjaan_mati" => "PNS",
            "alamat_mati" => "Jakarta",
            "tgl_mati" => "2024-09-12",
            "pukul_mati" => "10:00",
            "sebab" => "Kecelakaan",
            "tempat_mati" => "Jakarta",
            "yang_menerangkan" => "Kasus",
            "nik_ibu" => 1234567890123,
            "nik_ayah" => 1234567890123,
            "nik_pelapor" => 1234567890123,
            "nik_saksisatu" => 1234567890123,
            "nik_saksidua" => 1234567890123,
            "nama_lampiran" => 'images/noimage.jpg',
            "nama_lampiran_ubah" => 'images/noimage.jpg',
            "verifikasi" => "Sudah Verifikasi"
        ]);
    }
}
