<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    private function useValidator(Request $request, array $rules)
    {
        return Validator::make($request->all(), $rules);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::query()->latest()->paginate(5);

        $title = "Hapus Guru!";
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("admin.teacher.index", [
            "teachers" => $teachers,
        ]);
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // try {
        //     $requestData = $request->all();
        //     $fileName = time().$request->file('image')->getClientOriginalName();
        //     $path = $request->file('image')->storeAs('images', $fileName, 'public');
        //     $requestData["image"] = '/storage/'.$path;
        //     // Validasi input terlebih dahulu
        //     $validator = $this->useValidator($request, [
        //         "email" => "required|email:dns",
        //         "name" => "required|max:50",
        //         "nip" => "required|max:50",
        //         "image" => 'image|mimes:jpeg,png,jpg,webp|max:5048',
        //         "position_category" => "required|max:50",
        //         "position" => "required",
        //         "gender" => "required",
        //         "active_status" => "required",
        //     ]);

        //     if ($validator->fails()) {
        //         return redirect()->back()
        //             ->withErrors($validator)
        //             ->withInput()
        //             ->with("errorCreateTeacher", "Gagal Menambahkan Guru Baru");
        //     }
        //     // menerima input yang sudah tervalidasi
        //     $validated = $validator->validated();
        //     // menambahkan key baru buat kolom user_id dengan value user saat ini
        //     $validated['user_id'] = Auth::user()->id;

        //     Teacher::query()->create($validated);

        //     return redirect()->route("teacher.index")->with("successCreateTeacher", "Berhasil Menambahkan Guru Baru");
        // } catch (QueryException $e) {
        //     Log::info($e);
        //     dd($e->getMessage());
        //     return redirect()->back()->with("errorCreateTeacher", "Gagal Menambahkan Guru Baru");
        // }
        $requestData = $request->all();
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;
        Teacher::create([
            'nip' => request('nip'),
            'email' => request('email'),
            'name' => request('name'),
            'position_category' => request('position_category'),
            'position' => request('position'),
            'image' => $requestData['image'],
            'gender' => request('gender'),
            'active_status' => request('active_status')
        ]);

        return redirect()->route("teacher.index")->with("message", "Berhasil Menambah Data Guru");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $teacher = Teacher::findOrFail($id);

            // Validasi input terlebih dahulu
            $validator = $this->useValidator($request, [
                "email" => "required|email:dns",
                "name" => "required|max:50",
                "nip" => "required|max:50",
                "position_category" => "required|max:50",
                "gender" => "required",
                "position" => "required",
                "active_status" => "required",
            ]);

            if ($request->hasFile('image')) {
                $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $fileName = time() . $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('images', $fileName, 'public');
                $requestData['image'] = '/storage/' . $path;

                if (File::exists(public_path($teacher->image))) {
                    File::delete(public_path($teacher->image));
                }

                $teacher->image = $requestData['image'];
            }

            $teacher->update([
                'name' => $request->name,
                'nip' => $request->nip,
                'position_category' => $request->position_category,
                'email' => $request->email,
                'position' => $request->position,
                'gender' => $request->gender,
                'active_status' => $request->active_status,
            ]);
            // menerima input yang sudah tervalidasi
            // $validated = $validator->validated();
            // menambahkan key baru buat kolom user_id dengan value user saat ini
            // $validated['user_id'] = Auth::user()->id;

            // Teacher::query()->where("id", "=", $teacher->id)->update($validated);

            return redirect()->route('teacher.index')->with("message", "Berhasil Update Data Guru");
        } catch (QueryException $e) {
            Log::info($e);
            dd($e->getMessage());
            return back()->with("errorUpdateTeacher", "Gagal memperbarui data guru");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Teacher::query()->where("id", "=", $id)->delete();

            return redirect()->route("teacher.index")->with("successDeleteTeacher", "Data Guru Berhasil Di Delete.");
        } catch (QueryException $e) {
            Log::info($e);
            dd($e->getMessage());
            return back()->with("errorDeleteTeacher", "Gagal menghapus data guru");
        }
    }

    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.detail', compact('teacher'));
    }

    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }
}
