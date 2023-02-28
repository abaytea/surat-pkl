<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', function () {
    return view('login');
})->name("login");

Route::get('/cetak/{id}', [SuratController::class, 'cetak']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/formtambahsurat', [SuratController::class, 'create']);
    // Route::get('/formprofile', function () {
    //     return view('page.profile');
    // });
    Route::get('/formdatasiswapkl', [SiswaController::class, 'index']);
    Route::get('/formtabelsurat', [SuratController::class, 'index']);
    // Route::get('/formdatasiswapkl', function () {
    //     return view('page.tabelsiswa');
    // });
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/tambahsiswapkl', [SiswaController::class, 'create']);
    });
    Route::get('/html', [SuratController::class, 'html']);

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/formtambahsurat', [SuratController::class, 'store']);
    Route::post('/formtambahsiswa', [AuthController::class, 'store']);
    Route::get('/formprofile', [AuthController::class, 'profile']);
    Route::post('/formeditprofile', [AuthController::class, 'editProfile']);
});
