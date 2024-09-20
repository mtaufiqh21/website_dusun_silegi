<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_kematians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kk')->unique();
            $table->string('nama_kepala_keluarga');
            $table->bigInteger('nik_mati');
            $table->string('nama_mati');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->string('tempat_kelahiran');
            $table->string('agama_mati');
            $table->string('pekerjaan_mati');
            $table->string('alamat_mati');
            $table->date('tgl_mati');
            $table->time('pukul_mati');
            $table->string('sebab');
            $table->string('tempat_mati');
            $table->string('yang_menerangkan');
            $table->bigInteger('nik_ibu');
            $table->bigInteger('nik_ayah');
            $table->bigInteger('nik_pelapor');
            $table->bigInteger('nik_saksisatu');
            $table->bigInteger('nik_saksidua');
            $table->longText('nama_lampiran');
            $table->longText('nama_lampiran_ubah');
            $table->string('verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kematians');
    }
};
