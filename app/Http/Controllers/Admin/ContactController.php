<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();

        $title = "Hapus Kontak!";
        $text = "Apakah anda yakin ingin menghapus??";
        confirmDelete($title, $text);

        return view("admin.kontak.index", [
            "contacts" => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'job_description' => 'required',
            'active_status' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'position' =>  $request->position,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'job_description' => $request->job_description,
            'active_status' => $request->active_status,
        ]);

        return redirect()->route("kontak.index")->with('message', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.kontak.detail', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.kontak.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'position' => 'required',
            'phone_number' => 'required',
            'job_description' => 'required',
            'active_status' => 'required',
        ]);

        $contact = Contact::findOrFail($id);

        $contact->update([
            'name' => $request->name,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'job_description' => $request->job_description,
            'active_status' => $request->active_status,
        ]);

        return redirect()->route('kontak.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get Contact by ID
        // $contact = Contact::findOrFail($id);

        // //delete Contact
        // $contact->delete();

        // //redirect to index
        // return redirect()->route("kontak.index")->with("successDeleteContact", "Data Kontak Berhasil Di Delete.");

        try {
            Contact::query()->where('id', '=', $id)->delete();

            return redirect()->route("kontak.index")->with("successDeleteContact", "Data Kontak Berhasil Di Delete.");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteContact", "Gagal menghapus data Kontak");
        }
    }
}
