<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataKematianController;
use App\Http\Controllers\Admin\FamilyCardController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PendapatanController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SuggestController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VillagerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Client\ClientTeacherController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\NewsController as ClientNewsController;
use App\Http\Controllers\Client\SejarahController;
use App\Http\Controllers\Client\VisimisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Middleware untuk client routes
Route::middleware([\App\Http\Middleware\AutoCreateLogs::class])->group(function () {
    Route::get('/', [HomeController::class, "index"])->name('home');
    Route::get('/visi-misi', [VisimisiController::class, "index"])->name('visi-misi');
    Route::get('/tenaga-pendidik', [ClientTeacherController::class, "index"])->name('tenaga-pendidik');
    Route::get('/students', [HomeController::class, "showAllStudent"])->name("homeStudents");
    Route::get('/news', [ClientNewsController::class, "index"])->name('news');
    Route::get('/news/1', [ClientNewsController::class, "test"])->name('news.detail');
    Route::get('/search', [ClientNewsController::class, "search"]);
    Route::get('/sejarah', [SejarahController::class, "index"])->name('sejarah');
    // Route::get('/news/{slug}', [ClientNewsController::class, 'detail'])->name('news.detail');
    Route::post('saran/create', [HomeController::class, "storeSuggestions"])->name('saran.create');

    // Middleware khusus untuk rute login dan logout
    Route::middleware('guest')->group(function () {
        Route::get("/login", [LoginController::class, "index"])->name("login");
        Route::post("/login", [LoginController::class, "login"])->name("postLogin");
    });

    Route::middleware('auth')->group(function () {
        Route::post("/logout", [LogoutController::class, "logout"])->name("logout");
    });
});

// Middleware untuk admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard");

    Route::resource("user", UserController::class)->names("user");
    Route::resource("student", StudentController::class)->names("student");
    Route::resource("teacher", TeacherController::class)->names("teacher");
    Route::resource("mapel", MapelController::class)->names("mapel");
    Route::resource("news", NewsController::class)->names("news");
    Route::resource("suggest", SuggestController::class)->names("suggest");
    Route::resource("galery", GaleryController::class)->names("galery");
    Route::resource("setting", SettingController::class)->names("setting");
    Route::resource("penduduk", VillagerController::class)->names("penduduk");
    Route::get('/penduduk/download/{file}', [VillagerController::class, 'download'])->name('penduduk.download');
    Route::resource("datakematian", DataKematianController::class)->names("datakematian");
    Route::get('/datakematian/download/{file}', [DataKematianController::class, 'download'])->name('datakematian.download');
    Route::resource("kartu-keluarga", FamilyCardController::class)->names("kartu-keluarga");
    Route::get('/kartu-keluarga/download/{file}', [FamilyCardController::class, 'download'])->name('kartu-keluarga.download');
    Route::resource("pendapatan", PendapatanController::class)->names("pendapatan");
    Route::resource("produk-dusun", ProductController::class)->names("produk-dusun");
    Route::resource("kontak", ContactController::class)->names("kontak");
});

