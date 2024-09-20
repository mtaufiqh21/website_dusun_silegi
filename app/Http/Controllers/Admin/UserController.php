<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->latest()->paginate(5);

        $title = "Hapus Pengguna!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.user.index", [
            "users" => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "email" => "required|email:dns",
                "password" => "required|max:50",
                "name" => "required|max:50",
                "role_id" => "required"
            ]);

            // jika gagal validasi sesuai rules
            if ($validator->fails()) throw new Exception();

            // menerima input yang sudah tervalidasi
            $validated = $validator->validated();

            User::query()->create($validated);

            return redirect()->route("user.index")->with("successCreateUser", "Berhasil Menambahkan User Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with("errorCreateUser", "Gagal Menambah User Baru");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            // cari data user berdasarkan id
            // id diambil dari input hidden dengan name user_id
            $user = User::query()->findOrFail($request->user_id);

            $user->email = $request->email;
            $user->name = $request->name;
            $user->role_id = $request->role_id;
            $user->status = $request->status;
            $user->save();

            return redirect()->route("user.index")->with("successUpdateUser", "Data Pengguna Berhasil Di Update.");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorUpdateUser", "Gagal memperbarui data user");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::query()->findOrFail($id);

            $user->delete();

            return redirect()->route("user.index")->with("successDeleteUser", "Data User Berhasil Di Delete.");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteUser", "Gagal menghapus data user");
        }
    }
}
