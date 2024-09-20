<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendapatan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendapatans = Pendapatan::get();

        $title = "Hapus Data Pendapatan!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.pendapatan.index", [
            "pendapatans" => $pendapatans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pendapatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "nominal_pendapatan" => "required",
                "tahun" => "required|numeric",
                "active_status" => "required"
            ]);

            Pendapatan::query()->create([
                "nominal_pendapatan" => $request->nominal_pendapatan,
                "tahun" => $request->tahun,
                "active_status" => $request->active_status,
            ]);

            return redirect()->route("pendapatan.index")->with("successCreateDataPendapatan", "Berhasil Menambahkan Data Pendapatan Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorCreateDataPendapatan', 'Gagal Menambahkan Data Pendapatan Baru');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        return view('admin.pendapatan.detail', compact('pendapatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        return view('admin.pendapatan.edit', compact('pendapatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                "nominal_pendapatan" => "required",
                "tahun" => "required|numeric",
                "active_status" => "required",
            ]);

            $pendapatan = Pendapatan::findOrFail($id);

            $pendapatan->update([
                "nominal_pendapatan" => $request->nominal_pendapatan,
                "tahun" => $request->tahun,
                "active_status" => $request->active_status,
            ]);

            return redirect()->route("pendapatan.index")->with("successUpdateDataPendapatan", "Berhasil Menambahkan Data Pendapatan Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorUpdateDataPendapatan', 'Gagal Menambahkan Data Pendapatan Baru');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Pendapatan::findOrFail($id);

            return redirect()->route("pendapatan.index")->with("successDeleteDataPendapatan", "Data Pendatan Berhasil Di Delete.");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteDataPendapatan", "Gagal menghapus data Pendatan");
        }
    }
}
