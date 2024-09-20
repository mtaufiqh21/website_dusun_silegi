<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();

        $title = "Hapus Produk!";
        $text = "Apakah anda yakin ingin menghapus??";
        confirmDelete($title, $text);

        return view("admin.produk.index", [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $requestData = $request->all();
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData["image"] = '/storage/' . $path;
            // Validasi input terlebih dahulu
            $this->validate($request, [
                "owner" => "required",
                "title" => "required|max:100",
                "phone_number" => "required|max:20",
                "image" => 'image|mimes:jpeg,png,jpg,webp|max:5048',
                "short_description" => "required|max:200",
                "price" => "required",
                "active_status" => "required",
            ]);

            // if ($validator->fails()) {
            //     return redirect()->back()
            //         ->withErrors($validator)
            //         ->withInput()
            //         ->with("errorCreateProduct", "Gagal Menambahkan Produk Baru");
            // }

            Product::query()->create([
                'owner' => $request->owner,
                'title' => $request->title,
                'phone_number' => $request->phone_number,
                'price' => $request->price,
                'image' => $requestData['image'],
                'short_description' => $request->short_description,
                'active_status' => $request->active_status,
            ]);

            return redirect()->route("produk-dusun.index")->with("successCreateProduct", "Berhasil Menambahkan Produk Baru");
        } catch (QueryException $e) {
            Log::info($e);
            dd($e->getMessage());
            return redirect()->back()->with("errorCreateProduct", "Gagal Menambahkan Produk Baru");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.produk.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.produk.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, [
                "owner" => "required",
                "title" => "required|max:100",
                "phone_number" => "required|max:20",
                "short_description" => "required|max:200",
                "price" => "required",
                "active_status" => "required",
            ]);

            $product = Product::findOrFail($id);

            if ($request->hasFile('image')) {
                $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $fileName = time() . $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('images', $fileName, 'public');
                $requestData['image'] = '/storage/' . $path;

                if (File::exists(public_path($product->image))) {
                    File::delete(public_path($product->image));
                }

                $product->image = $requestData['image'];
            }

            $product->update([
                'owner' => $request->owner,
                'title' => $request->title,
                'phone_number' => $request->phone_number,
                'price' => $request->price,
                'short_description' => $request->short_description,
                'active_status' => $request->active_status,
            ]);

            return redirect()->route("produk-dusun.index")->with("successUpdateProduct", "Berhasil Mengupdate Produk Baru");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return redirect()->back()->withInput()->with('errorUpdateProduct', 'Gagal mengupdate Produk Baru');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Product::query()->where('id', '=', $id)->delete();

            return redirect()->route("produk-dusun.index")->with("successDeleteProduct", "Data Produk Berhasil Di Delete.");
        } catch (QueryException $e) {
            Log::info($e->getMessage());
            return back()->with("errorDeleteProduct", "Gagal menghapus data Produk");
        }
    }
}
