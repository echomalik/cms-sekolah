<?php

use App\Http\Controllers\SchoolController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SchoolController::class, 'index']);
Route::get('/daftar-wali-kelas', [SchoolController::class, 'guru']);
Route::get('/berita', [SchoolController::class, 'berita']);
Route::get('/prestasi-siswa', [SchoolController::class, 'prestasi']);
Route::get('/homepage', [SchoolController::class, 'homepage']);
Route::get('/osis-mpk', [SchoolController::class, 'osis_mpk']);
Route::get('/kejuruan', [SchoolController::class, 'kejuruan']);
Route::get('/ekstrakulikuler', [SchoolController::class, 'ekstrakulikuler']);