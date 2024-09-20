<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataKematian;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DataKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKematians = DataKematian::get();

        $title = "Hapus Data Kematian!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.data-kematian.index", [
            "dataKematians" => $dataKematians,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data-kematian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'no_kk' => 'required|numeric',
                "nama_kepala_keluarga" => 'required',
                "nik_mati" => 'required|numeric',
                "nama_mati" => 'required',
                "jenis_kelamin" => 'required',
                "tgl_lahir" => 'required',
                "tempat_kelahiran" => 'required',
                "agama_mati" => 'required',
                "pekerjaan_mati" => 'required',
                "alamat_mati" => 'required',
                "tgl_mati" => 'required',
                "pukul_mati" => 'required',
                "sebab" => 'required',
                "tempat_mati" => 'required',
                "yang_menerangkan" => 'required',
                "nik_ibu" => 'required',
                "nik_ayah" => 'required',
                "nik_pelapor" => 'required',
                "nik_saksisatu" => 'required',
                "nik_saksidua" => 'required',
                'file' => 'required|mimes:docx,pdf|max:5048',
                "verifikasi" => 'required'
            ]);

            $file = $request->file('file');
            $fileName = $file->hashName();
            $file->storeAs('public/uploads', $fileName);

            DataKematian::query()->create([
                'no_kk' => $request->no_kk,
                "nama_kepala_keluarga" => $request->nama_kepala_keluarga,
                "nik_mati" => $request->nik_mati,
                "nama_mati" => $request->nama_mati,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tgl_lahir" => $request->tgl_lahir,
                "tempat_kelahiran" => $request->tempat_kelahiran,
                "agama_mati" => $request->agama_mati,
                "pekerjaan_mati" => $request->pekerjaan_mati,
                "alamat_mati" => $request->alamat_mati,
                "tgl_mati" => $request->tgl_mati,
                "pukul_mati" => $request->pukul_mati,
                "sebab" => $request->sebab,
                "tempat_mati" => $request->tempat_mati,
                "yang_menerangkan" => $request->yang_menerangkan,
                "nik_ibu" => $request->nik_ibu,
                "nik_ayah" => $request->nik_ayah,
                "nik_pelapor" => $request->nik_pelapor,
                "nik_saksisatu" => $request->nik_saksisatu,
                "nik_saksidua" => $request->nik_saksidua,
                'nama_lampiran' => $file->getClientOriginalName(),
                'nama_lampiran_ubah' => $fileName,
                "verifikasi" => $request->verifikasi,
            ]);


            return redirect()->route("datakematian.index")->with("successCreateDataKematian", "Berhasil Menambahkan Data Kematian Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorCreateDataKematian', 'Gagal Menambahkan Data Kematian Baru');
        }
    }

    public function download(DataKematian $file)
    {
        Log::info('Download method called.');

        $filePath = storage_path("app/public/uploads/{$file->nama_lampiran_ubah}");

        Log::info("File path: " . $filePath);

        if (file_exists($filePath)) {
            return response()->download($filePath, $file->nama_lampiran);
        } else {
            abort(404, 'File not found');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataKematian = DataKematian::findOrFail($id);
        return view('admin.data-kematian.detail', compact('dataKematian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataKematian = DataKematian::findOrFail($id);
        return view('admin.data-kematian.edit', compact('dataKematian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'no_kk' => 'required|numeric',
                "nama_kepala_keluarga" => 'required',
                "nik_mati" => 'required|numeric',
                "nama_mati" => 'required',
                "jenis_kelamin" => 'required',
                "tgl_lahir" => 'required',
                "tempat_kelahiran" => 'required',
                "agama_mati" => 'required',
                "pekerjaan_mati" => 'required',
                "alamat_mati" => 'required',
                "tgl_mati" => 'required',
                "pukul_mati" => 'required',
                "sebab" => 'required',
                "tempat_mati" => 'required',
                "yang_menerangkan" => 'required',
                "nik_ibu" => 'required',
                "nik_ayah" => 'required',
                "nik_pelapor" => 'required',
                "nik_saksisatu" => 'required',
                "nik_saksidua" => 'required',
                "verifikasi" => 'required'
            ]);

            $dataKematian = DataKematian::findOrFail($id);

        // Cek apakah ada file baru yang diunggah
        if ($request->hasFile('file')) {
            $this->validate($request, [
                'file' => 'required|mimes:docx,pdf|max:5048',
            ]);

            // Mendapatkan nama file asli
            $fileName = $request->file('file')->getClientOriginalName();

            // Menyimpan file dengan nama yang sama
            $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $requestData['file'] = $fileName;  // Hanya menyimpan nama file, bukan path

            // Menghapus file lama jika ada
            if (File::exists(public_path('uploads/' . $dataKematian->nama_lampiran))) {
                File::delete(public_path('uploads/' . $dataKematian->nama_lampiran));
            }

            // Memperbarui nama lampiran di data kematian
            $dataKematian->nama_lampiran = $requestData['file'];
        }

            $dataKematian->update([
                'no_kk' => $request->no_kk,
                "nama_kepala_keluarga" => $request->nama_kepala_keluarga,
                "nik_mati" => $request->nik_mati,
                "nama_mati" => $request->nama_mati,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tgl_lahir" => $request->tgl_lahir,
                "tempat_kelahiran" => $request->tempat_kelahiran,
                "agama_mati" => $request->agama_mati,
                "pekerjaan_mati" => $request->pekerjaan_mati,
                "alamat_mati" => $request->alamat_mati,
                "tgl_mati" => $request->tgl_mati,
                "pukul_mati" => $request->pukul_mati,
                "sebab" => $request->sebab,
                "tempat_mati" => $request->tempat_mati,
                "yang_menerangkan" => $request->yang_menerangkan,
                "nik_ibu" => $request->nik_ibu,
                "nik_ayah" => $request->nik_ayah,
                "nik_pelapor" => $request->nik_pelapor,
                "nik_saksisatu" => $request->nik_saksisatu,
                "nik_saksidua" => $request->nik_saksidua,
                "verifikasi" => $request->verifikasi,
            ]);

            return redirect()->route("datakematian.index")->with("successUpdateDataKematian", "Berhasil Mengupdate Data Kematian Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorUpdateDataKematian', 'Gagal Mengupdate Data Kematian Baru');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ambil data terlebih dahulu
        $dataKematian = DataKematian::find($id);

        try {
            if ($dataKematian) {
                // Hapus berkas terkait
                Storage::delete($dataKematian->nama_lampiran_ubah);

                // Hapus data dari database
                $dataKematian->delete();

                return redirect()->route("datakematian.index")->with("successDeleteDataKematian", "Data Kematian Berhasil Di Delete.");
            } else {
                return back()->with("errorDeleteDataKematian", "Data Kematian tidak ditemukan.");
            }
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteDataKematian", "Gagal menghapus data Kematian");
        }
    }
}
