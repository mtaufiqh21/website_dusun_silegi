<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index() {
        $setting = Setting::where('active_status', true)->get();
        $view_data = [
            'setting' => $setting,
        ];

        return view('client.history-page.index', $view_data);
    }
}
