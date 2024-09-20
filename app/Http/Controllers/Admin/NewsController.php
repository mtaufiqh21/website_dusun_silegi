<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all()->map(function ($item) {
            $item->posting_date = Carbon::parse($item->posting_date)->translatedFormat('d F Y');
            return $item;
        });

        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;

        $this->validate($request, [
            'title' => 'required',
            'posting_date' => 'required',
            'author' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'active_status' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' =>  $request->author,
            'posting_date' => $request->posting_date,
            'image' => $requestData['image'],
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'active_status' => $request->active_status,
        ]);
        // News::create([
        //     'title' => request('title'),
        //     'slug' => Str::slug($request->title),
        //     'posting_date' => request('posting_date'),
        //     'image' => $requestData['image'],
        //     'short_description' => request('short_description'),
        //     'long_description' => request('long_description'),
        //     'active_status' => request('active_status')
        // ]);

        return redirect()->route('news.index')->with('message', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.detail', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $news = News::select('title', 'posting_date', 'image', 'short_description', 'long_description', 'active_status')->where('id', '=', $id)->first();

        // $view_data = [
        //     'news' => $news
        // ];

        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));

        // return view('admin.news.edit', $view_data)->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'posting_date' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'active_status' => 'required',
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData['image'] = '/storage/' . $path;

            if (File::exists(public_path($news->image))) {
                File::delete(public_path($news->image));
            }

            $news->image = $requestData['image'];
        }

        $news->update([
            'title' => $request->title,
            'author' => $request->author,
            'slug' => Str::slug($request->title),
            'posting_date' => $request->posting_date,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'active_status' => $request->active_status,
        ]);

        return redirect()->route('news.index')->with('message', 'Data Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get News by ID
        $news = News::findOrFail($id);

        //delete image
        Storage::delete($news->image);

        //delete news
        $news->delete();

        //redirect to index
        return redirect()->back()->with("message", "Data Guru Berhasil Di Delete.");
    }
}
