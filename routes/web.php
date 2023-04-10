<?php

use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengantarnikahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SktmsekolahController;
use App\Http\Controllers\VerificationController;
use App\Models\Sktmsekolah;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('menu/navbar');
// });



Route::get('/', function () {
    return view('components/beranda', ['title' => 'beranda']);
});

Route::get('/tentang', function () {
    return view('components/tentang', ['title' => 'tentang']);
});

Route::get('/berita', function () {
    return view('components/berita');
});

// Route::get('/login', function () {
//     return view('components/login', ["title" => "login"]);
// });

// middleware('guest')->gunanya untuk mencegah user supaya keluar melalui tombol logout

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// email verification
Route::get('/email/verify', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
// akhir email verification

// Route::get('/register', function () {
//     return view('components/formpendaftaran', ["title" => "Dafrar"]);
// });


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard/dashboard', ["title" => "Dashboard"]);
})->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/pengajuan-surat', function () {
    return view('dashboard/konten', ["title" => "Pengajuan Surat"]);
})->name('pengajuan-surat')->middleware('auth');

Route::get('/list-surat', function () {
    return view('dashboard/list', ['title' => "List Surat"]);
})->name('list-surat')->middleware('auth');

// Route::get('/detail-surat', function () {
//     return view('dashboard/detail', ['title' => "Detail Surat"]);
// });




// Route::get('/mainsurat', function () {
//     return view('kopsurat/mainsurat', ["title" => "surat"]);
// });



// Route::get('/sktm-rs', function () {
//     return view('kopsurat/sktmrs', ["title" => "SKTM-RUMAH SAKIT"]);
// });

// Route::get('/domisili', function () {
//     return view('kopsurat/suratdomisili', ["title" => "SKTM-RUMAH SAKIT"]);
// });

Route::get('/formsktmrs', function () {
    return view('formulirSurat/formsktmrs', ["title" => "FORMULIR SKTM RS"]);
});

// Route::get('/formdomisili', function () {
//     return view('formulirSurat/formdomisili', ["title" => "FORMULIR DOMISILI"]);
// });

Route::get('/formsktmsekolah', function () {
    return view('formulirSurat/formsktmsekolah', ["title" => "FORMULIR SKTM SEKOLAH"]);
});

// domisili
Route::get('/detail-surat', [DomisiliController::class, 'index'])->name('detail-surat')->middleware('auth');
Route::get('/domisili/{domisili}', [DomisiliController::class, 'show'])->name('domisili')->middleware('auth');
Route::get('/cetak/{domisili}', [DomisiliController::class, 'cetak'])->name('cetak')->middleware('auth');
Route::get('/list-pengajuan-domisili', [DomisiliController::class, 'index']);
Route::get('/form-domisili', [DomisiliController::class, 'create']);
Route::post('/list-pengajuan-domisili', [DomisiliController::class, 'store']);
// akhir domisili

// sktm sekolah
Route::get('/list-surat-sktm-sekolah', [SktmsekolahController::class, 'index'])->middleware('auth')->name('list-surat-sktm-sekolah');
Route::post('/list-pengajuan-sktmsekolah', [SktmsekolahController::class, 'store']);
Route::get('/sktmsekolah/{sktmsekolah}', [SktmsekolahController::class, 'show'])->middleware('auth')->name('sktmsekolah');
// akhir sktm sekolah

Route::get('/list-pengantar-nikah', [PengantarnikahController::class, 'index']);
Route::post('/list-pengantar-nikah', [PengantarnikahController::class, 'store']);
Route::get('pengantarnikah/{pengantarnikah}', [PengantarnikahController::class, 'show']);
