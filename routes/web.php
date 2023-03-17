<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\AdminRegisterController;

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
    return view('welcome');
});
// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::get('register', [Registercontroller::class,'index'])->name('register');
Route::post('register/store', [Registercontroller::class,'store'])->name('register.store');

Route::get('login', [Logincontroller::class,'index'])->name('login');
Route::post('login/store', [Logincontroller::class,'store'])->name('login.store');
Route::get('logout', [Logincontroller::class,'logout'])->name('logout');

Route::get('home', [Homecontroller::class,'index'])->name('home');
Route::post('pengaduan', [Homecontroller::class,'store'])->name('pengaduan');
Route::get('list-pengaduan', [HomeController::class,'list'])->name('list-pengaduan');
Route::get('list-pengaduan/{id_pengaduan}', [HomeController::class,'show'])->name('list-pengaduan.show');

//admin
Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
// Route::get('tanggapan', [TanggapanController::class,'index'])->name('tanggapan');
Route::get('admin/login', [LoginController::class,'index'])->name('admin.login');
Route::post('admin/login/store', [LoginController::class,'store'])->name('admin.login.store');
Route::get('admin/logout', [LoginController::class,'logout'])->name('admin.logout');

Route::get('tanggapan', [TanggapanController::class,'index'])->name('tanggapan');
Route::get('tanggapan/create/{id_pengaduan}', [TanggapanController::class,'create'])->name('tanggapan.create');
Route::post('tanggapan/store/{id_pengaduan}', [TanggapanController::class,'store'])->name('tanggapan.store');
Route::get('tanggapan/show/{id_pengaduan}', [TanggapanController::class,'show'])->name('tanggapan.show');
Route::get('tanggapan/cetak-pdf/{id_pengaduan}', [TanggapanController::class,'pdf'])->name('tanggapan.pdf');
Route::get('pengaduan/destroy/{id_pengaduan}', [HomeController::class,'destroy'])->name('pengaduan.destroy');
Route::get('pengaduan/status/{id_pengaduan}', [TanggapanController::class,'update'])->name('pengaduan.status');

Route::get('admin/register', [AdminRegisterController::class,'index'])->name('admin.register');
Route::post('admin/register/store', [AdminRegisterController::class,'store'])->name('admin.register.store');

Route::get('petugas', [PetugasController::class, 'index'])->name('petugas');
Route::get('petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::get('petugas/destroy/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');