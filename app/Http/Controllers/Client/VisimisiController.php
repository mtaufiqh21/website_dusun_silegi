<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index() {
        $teachers = Teacher::where('active_status', true)->where('position_category', 'Kepala Sekolah')->take(1)->get();
        $setting = Setting::get();
        $view_data = [
            'teachers' => $teachers,
            'setting' => $setting,
        ];

        return view('client.visi-misi.index', $view_data);
    }
}
