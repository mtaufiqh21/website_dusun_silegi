<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Galery;
use App\Models\News;
use App\Models\Setting;
use App\Models\Suggest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\suggest;

class HomeController extends Controller
{
    public function index()
    {
        // $users = User::query()->latest()->where("role_id", "=", "9bae0006-2480-4f34-9856-cc605550b9b4")->take(8)->get();

        // return view('new-home', [
        //     "users" => $users
        // ]);

        $news = News::where('active_status', true)->take(3)->orderBy('posting_date', 'desc')->get();
        $galeries = Galery::where('active_status', true)->get();
        $teachers = Teacher::where('active_status', true)->get();
        $setting = Setting::get();
        $view_data = [
            'news' => $news,
            'galeries' => $galeries,
            'teachers' => $teachers,
            'setting' => $setting,
        ];
        // dd($view_data);
        return view('client.landing-page.index', $view_data);
    }

    public function settingHeader() {
        $setting = Setting::get();
        $view_data = [
            'setting' => $setting,
        ];
        // dd($view_data);
        return view('layouts.header', compact('setting'));
    }

    public function showAllStudent()
    {
        $users = User::query()->latest()->where("role_id", "=", "9bae0006-2480-4f34-9856-cc605550b9b4")->get();

        return view('home-students', [
            "users" => $users
        ]);
    }

    public function storeSuggestions (Request $request) {
        $this->validate($request, [
            'name' =>'required',
            'email' =>'required|email',
            'phone_number' => 'required',
            'suggestion' =>'required'
        ]);

        Suggest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'suggestion' => $request->suggestion
        ]);

        return redirect()->back()->with('message', 'Saran sudah dikirim, Terima Kasih!');
    }

    public function showAllTeachers() {

        $teachers = Teacher::where('active_status', true)->get();
        $view_data = [
            'teachers' => $teachers,
        ];

        dd($view_data);
        return view('client.teacher.index', $view_data);
    }

    public function showAllNews() {

        $news = News::where('active_status', true)->get();
        $view_data = [
            'news' => $news,
        ];

        dd($view_data);
        return view('client.news.index', $view_data);
    }
}
