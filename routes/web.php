<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
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

// Homepage
Route::get('/', function () {
    return view('home');
})->name('page.landing');

Route::middleware('auth')->group(function () {
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

// Route::middleware('auth')->group(function () {
//     Route::post('/registrasi/regis-baru', [RegistrationController::class, 'registrasi'])->name('registrasi.baru');

//     Route::get('/konfirmasi-pembayaran/{user_id}', [RegistrationController::class, 'showKonfirmasiPembayaran'])->name('konfirmasi.pembayaran');
//     Route::post('/konfirmasi-pembayaran/store', [RegistrationController::class, 'konfirmasiPembayaran'])->name('konfirmasi.pembayaran.store');
// });

// Profile
Route::get('/profile', function () {
    return view('profile');
});

// News
Route::get('/news', function () {
    return view('news');
});


Route::get('/news/2', function () {
    return view('news2');
});

// Event
Route::get('/event', function () {
    return view('event');
});
// Event MLC
Route::get('/event/mlc', function () {
    return view('event.mlc.mlc');
});

Route::get('/event/mlc/register', function () {
    return view('event.mlc.registration.registration');
});



Route::post('/event/mlc/register/confirmation', [RegistrationController::class, 'registrasi']);

Route::get('/regis/cek/{id}', [RegistrationController::class, 'getRegis']);

Route::get('/event/mlc/register/success/{id}',    [RegistrationController::class, 'invoice']);

Route::get('/event/mlc/verifikasipembayaran', function () {
    return view('event.mlc.verifikasipembayaran.verifikasi');
});

Route::post(
    '/event/mlc/verifikasipembayaran/success',
    [PaymentController::class, 'konfirmasiPembayaran']
    // function () {
    //     return view('event.mlc.verifikasipembayaran.success');
    // }
);

Route::get('/event/mlc/bookingstatus', function () {
    return view('event.mlc.bookingstatus.bookingstatus');
});

Route::get('/event/mlc/regulation', function () {
    return view('event.mlc.regulation.regulation');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/verifikasi', function () {
    return view('admin.verifikasi', ['title' => 'Gallery']);
});
Route::get('/admin/peserta', function () {
    return view('admin.peserta', ['title' => 'Gallery']);
});
Route::get('/admin/tabel', function () {
    return view('admin.tabel', ['title' => 'MLC']);
});
