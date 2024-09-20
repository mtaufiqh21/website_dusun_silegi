<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::where('active_status', true)->get();
        $setting = Setting::get();
        $view_data = [
            'news' => $news,
            'setting' => $setting,
        ];
        // dd($view_data);
        return view('client.news.index', $view_data);
    }

    public function test()
    {
        return view('client.news.detail');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $news = News::where(function ($query) use ($search){
            $query->where('title', 'like', "%$search%")->orWhere('long_description', 'like', "%$search%");
        })->get();

        $setting = Setting::get();

        return view('client.news.index', compact('news', 'search', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $slug)
    {
        // Assuming 'slug' is the column name in your 'news' table
        $setting = Setting::get();
        $news = News::where('slug', $slug)->firstOrFail();
        $allNews = News::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();
        // $allNews = News::inRandomOrder()->take(3)->get();
        $view_data = [
            'setting' => $setting,
            'news' => $news,
            'allNews' => $allNews,
        ];

        return view('client.news.detail', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
