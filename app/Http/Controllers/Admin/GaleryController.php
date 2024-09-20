<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index() {
        return view('admin.galery.index', [
            'galeries' => Galery::get(),
        ]);
    }

    public function create()
    {
        return view('admin.galery.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Galery::create([
            'image_name' => request('image_name'),
            'image' => $requestData['image'],
            'description' => request('description'),
            'active_status' => request('active_status')
        ]);

        return redirect()->route('galery.index')->with('message', 'Data Created Successfully');
    }

    public function show(string $id)
    {
        $galeries = Galery::findOrFail($id);
        return view('admin.galery.detail', compact('galeries'));
    }

    public function edit(string $id)
    {

        // $news = News::select('title', 'posting_date', 'image', 'short_description', 'long_description', 'active_status')->where('id', '=', $id)->first();

        // $view_data = [
        //     'news' => $news
        // ];

        $galeries = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('galeries'));

        // return view('admin.news.edit', $view_data)->with('news', $news);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'image_name' => 'required',
            'description' => 'required',
            'active_status' => 'required',
        ]);

        $galery = Galery::findOrFail($id);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $fileName = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData['image'] = '/storage/'.$path;

            if (File::exists(public_path($galery->image))) {
                File::delete(public_path($galery->image));
            }

            $galery->image = $requestData['image'];
        }

        $galery->update([
            'image_name' => $request->image_name,
            'description' => $request->description,
            'active_status' => $request->active_status,
        ]);

        return redirect()->route('galery.index')->with('message', 'Data Updated Successfully');
    }

    public function destroy(string $id)
    {
        //get News by ID
        $galeries = Galery::findOrFail($id);

        //delete image
        Storage::delete($galeries->image);

        //delete galeries
        $galeries->delete();

        //redirect to index
        return redirect()->back()->with('message', 'Data Deleted Successfully');
    }
}
