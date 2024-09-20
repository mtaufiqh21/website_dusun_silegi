<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Villager;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villagers = Villager::get();

        $title = "Hapus Penduduk!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.penduduk.index", [
            "villagers" => $villagers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "nik" => "required|numeric",
                "name" => "required",
                "email" => "required|email",
                "phone_number" => "required|numeric",
                "gender" => "required",
                "address" => "required",
                "file" => "required|mimes:docx,pdf|max:5048",
                "active_status" => "required"
            ]);

            $file = $request->file("file");
            $fileName = $file->hashName();
            $file->storeAs("public/uploads", $fileName);

            Villager::query()->create([
                "nik" => $request->nik,
                "name" => $request->name,
                "email" => $request->email,
                "phone_number" => $request->phone_number,
                "gender" => $request->gender,
                "address" => $request->address,
                "identity_card" => $file->getClientOriginalName(),
                "active_status" => $request->active_status,
            ]);

            return redirect()->route("penduduk.index")->with("successCreateDataPenduduk", "Berhasil Menambahkan Data Penduduk Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorCreateDataPenduduk', 'Gagal Menambahkan Data Penduduk Baru');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $villager = Villager::findOrFail($id);
        return view('admin.penduduk.detail', compact('villager'));
    }

    public function download(Villager $file)
    {
        Log::info('Download method called.');

        $filePath = storage_path("app/public/uploads/{$file->identity_card}");

        Log::info("File path: " . $filePath);

        if (file_exists($filePath)) {
            return response()->download($filePath, $file->identity_card);
        } else {
            abort(404, 'File not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $villager = Villager::findOrFail($id);
        return view('admin.penduduk.edit', compact('villager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'nik' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|numeric',
                'address' => 'required',
                'gender' => 'required',
                'active_status' => 'required|in:0,1',
            ]);

            $villager = Villager::findOrFail($id);

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
                if (File::exists(public_path('uploads/' . $villager->identity_card))) {
                    File::delete(public_path('uploads/' . $villager->identity_card));
                }

                // Memperbarui nama lampiran di data kematian
                $villager->identity_card = $requestData['file'];
            }

            $villager->update([
                'nik' => $request->nik,
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'gender' => $request->gender,
                'active_status' => $request->active_status
            ]);

            return redirect()->route("penduduk.index")->with("successUpdateDataPenduduk", "Berhasil Mengupdate Data Penduduk Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorUpdateDataPenduduk', 'Gagal Mengupdate Data Penduduk Baru');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ambil data terlebih dahulu
        $villager = Villager::find($id);

        try {
            if ($villager) {
                // Hapus berkas terkait
                Storage::delete($villager->identity_card);

                // Hapus data dari database
                $villager->delete();
                return redirect()->route("penduduk.index")->with("successDeleteDataPenduduk", "Data Penduduk Berhasil Di Delete.");
            } else {
                return back()->with("errorDeleteDataPenduduk", "Data Penduduk tidak ditemukan.");
            }
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteDataPenduduk", "Gagal menghapus data Penduduk");
        }
    }
}
