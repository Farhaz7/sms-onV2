<?php

use App\Http\Controllers\BerkasController;
use App\Http\Controllers\BerkasUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\UploadBerkasController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

 Route::get('/', function () { return view('landingpg');});

 route::get('/login', [LoginController::class, 'index'])->name('login');
 route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
 route::get('/logout', [LoginController::class, 'logout'])->name('logout');

 Route::get('register', [RegisterController::class, 'register'])->name('register');
 Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

 route::get('dbuser', [DashboardController::class, 'dbuser'])->name('dbuser');

 route::get('syarat', [SyaratController::class, 'syarat'])->name('syarat');

 route::get('profil', [ProfilController::class, 'profil'])->name('profil');

 route::get('editprofil', [EditProfilController::class, 'editprofil'])->name('editprofil');


 Route::put('/simpan-data/{id}', [ProfilController::class, 'updateProfile']);

 route::get('uploadberkas', [UploadBerkasController::class, 'upload'])->name('upload');

 route::get('berkas', [BerkasUserController::class, 'berkas'])->name('berkas');

 Route::get('/uploadberkas', [BerkasController::class, 'showUploadForm'])->name('uploadberkas.form');

Route::post('/uploadberkas', [BerkasController::class, 'uploadFile'])->name('uploadberkas.submit');







