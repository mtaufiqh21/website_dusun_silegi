<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use App\Models\Logging;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Mapel;
use App\Models\News;
use App\Models\Pendapatan;
use App\Models\Setting;
use App\Models\Suggest;
use App\Models\Villager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Top Pages
        $topPages = Logging::groupBy('path')
            ->selectRaw('path, count(*) as total')
            ->orderBy('total', 'desc')
            ->get()
            ->toArray();

        // Access Daily
        $accessDaily = DB::select("
        SELECT
            (SELECT DATE_FORMAT(created_at, '%Y-%m-%d') FROM loggings where created_at is not null ORDER BY created_at desc LIMIT 1) - INTERVAL seq-1 DAY  AS dates,
            (select count(*) from loggings where date(created_at) = dates) as count
        FROM seq_31_to_1
        ");

        // Query for Devices
        $queryDesktop = Logging::where('is_desktop', '1')->count();
        $queryMobile = Logging::where('is_mobile', '1')->count();
        $queryTablet = Logging::where('is_tablet', '1')->count();

        $total_pendapatan = Pendapatan::select(DB::raw("
        SUM(CAST(REPLACE(REPLACE(nominal_pendapatan, 'Rp.', ''), '.', '') AS DECIMAL(15,2))) as total
    "))->first();

        // dd($total_pendapatan);

        // Sending Data to View
        return view("admin.home", [
            "total_user" => User::query()->count(),
            "total_penduduk" => Villager::query()->count(),
            "total_pendapatan" => $total_pendapatan->total,
            "total_mapel" => Mapel::query()->count(),
            "total_berita" => News::query()->count(),
            "total_galeri" => Galery::query()->count(),
            "total_saran" => Suggest::query()->count(),
            "total_setting" => Setting::query()->count(),
            "topPages" => $topPages,
            "queryDesktop" => $queryDesktop,
            "queryMobile" => $queryMobile,
            "queryTablet" => $queryTablet,
            "accessDaily" => $accessDaily,
        ]);
    }
}
