<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FamilyCard;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FamilyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familys = FamilyCard::get();

        $title = "Hapus Data Keluarga!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.kartu-keluarga.index", [
            "familys" => $familys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kartu-keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "no_kk" => "required|numeric",
                "name" => "required",
                "address" => "required",
                "phone_number" => "required|numeric",
                "wilayah" => "required",
                "rt" => "required|numeric",
                "rw" => "required|numeric",
                "file" => "required|mimes:docx,pdf|max:5048",
                "active_status" => "required"
            ]);

            $file = $request->file("file");
            $fileName = $file->hashName();
            $file->storeAs("public/uploads", $fileName);

            FamilyCard::query()->create([
                "no_kk" => $request->no_kk,
                "name" => $request->name,
                "address" => $request->address,
                "phone_number" => $request->phone_number,
                "family_card_identity" => $file->getClientOriginalName(),
                "wilayah" => $request->wilayah,
                "rt" => $request->rt,
                "rw" => $request->rw,
                "active_status" => $request->active_status,
            ]);

            return redirect()->route("kartu-keluarga.index")->with("successCreateDataKartuKeluarga", "Berhasil Menambahkan Data Kartu Keluarga Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorCreateDataKartuKeluarga', 'Gagal Menambahkan Data Kartu Keluarga Baru');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $familyCard = FamilyCard::findOrFail($id);
        return view('admin.kartu-keluarga.detail', compact('familyCard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $familyCard = FamilyCard::findOrFail($id);
        return view('admin.kartu-keluarga.edit', compact('familyCard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                "no_kk" => "required|numeric",
                "name" => "required",
                "address" => "required",
                "phone_number" => "required|numeric",
                "wilayah" => "required",
                "rt" => "required|numeric",
                "rw" => "required|numeric",
                "active_status" => "required"
            ]);

            $familyCard = FamilyCard::findOrFail($id);

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
                if (File::exists(public_path('uploads/' . $familyCard->family_card_identity))) {
                    File::delete(public_path('uploads/' . $familyCard->family_card_identity));
                }

                // Memperbarui nama lampiran di data kematian
                $familyCard->family_card_identity = $requestData['file'];
            }

            $familyCard->update([
                "no_kk" => $request->no_kk,
                "name" => $request->name,
                "address" => $request->address,
                "phone_number" => $request->phone_number,
                "wilayah" => $request->wilayah,
                "rt" => $request->rt,
                "rw" => $request->rw,
                "active_status" => $request->active_status,
            ]);

            return redirect()->route("kartu-keluarga.index")->with("successUpdateDataKartuKeluarga", "Berhasil Mengupdate Data Kartu Keluarga Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorUpdateDataKartu Keluarga', 'Gagal Mengupdate Data KartuKeluarga Baru');
        }
    }

    public function download(FamilyCard $file)
    {
        Log::info('Download method called.');

        $filePath = storage_path("app/public/uploads/{$file->family_card_identity}");

        Log::info("File path: " . $filePath);

        if (file_exists($filePath)) {
            return response()->download($filePath, $file->family_card_identity);
        } else {
            abort(404, 'File not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ambil data terlebih dahulu
        $familyCard = FamilyCard::find($id);

        try {
            if ($familyCard) {
                // Hapus berkas terkait
                Storage::delete($familyCard->family_card_identity);

                // Hapus data dari database
                $familyCard->delete();
                return redirect()->route("kartu-keluarga.index")->with("successDeleteDataKartuKeluarga", "Data Penduduk Berhasil Di Delete.");
            } else {
                return back()->with("errorDeleteDataKartuKeluarga", "Data Penduduk tidak ditemukan.");
            }
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteDataKartuKeluarga", "Gagal menghapus data Penduduk");
        }
    }
}
