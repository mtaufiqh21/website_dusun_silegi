<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClientTeacherController extends Controller
{
    public function index() {
        $teachers = Teacher::where('active_status', true)->get();
        $setting = Setting::get();
        $view_data = [
            'teachers' => $teachers,
            'setting' => $setting,
        ];
        return view('client.tenaga-pendidik.index', $view_data);
    }
}
