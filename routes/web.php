<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\RegisterController as AdminRegisterController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LandingController::class,'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function() {
    
    Route::get('logout', [LoginController::class,'logout'])->name('logout');
    Route::get('list-pengaduan', [HomeController::class,'list'])->name('list-pengaduan');
    Route::get('list-pengaduan/{id_pengaduan}', [HomeController::class,'show'])->name('list-pengaduan.show');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('login', [LoginController::class,'index'])->name('login');
    Route::post('login/store', [LoginController::class,'store'])->name('login.store');

    Route::get('register', [RegisterController::class,'index'])->name('register');
    Route::post('register/store', [RegisterController::class,'store'])->name('register.store');
});


Route::get('home', [HomeController::class,'index'])->name('home');
Route::post('pengaduan', [HomeController::class,'store'])->name('pengaduan');


//admin
Route::group(['middleware' => ['islogin']], function(){
    Route::group(['middleware' => ['ispetugas']], function(){
        
            Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
            Route::get('tanggapan', [TanggapanController::class,'index'])->name('tanggapan');
            Route::get('tanggapan/create/{id_pengaduan}', [TanggapanController::class,'create'])->name('tanggapan.create');
            Route::post('tanggapan/store/{id_pengaduan}', [TanggapanController::class,'store'])->name('tanggapan.store');
            Route::get('tanggapan/show/{id_pengaduan}', [TanggapanController::class,'show'])->name('tanggapan.show');
    
            Route::get('pengaduan/destroy/{id_pengaduan}', [HomeController::class,'destroy'])->name('pengaduan.destroy');
            Route::get('pengaduan/status/{id_pengaduan}', [TanggapanController::class,'update'])->name('pengaduan.status');
    
            Route::get('admin/logout', [AdminLoginController::class,'logout'])->name('admin.logout');

    Route::group(['middleware' => ['isadmin']], function(){
        
            Route::get('tanggapan/cetak-pdf/{id_pengaduan}', [TanggapanController::class,'pdf'])->name('tanggapan.pdf');

            Route::get('petugas', [PetugasController::class, 'index'])->name('petugas')->middleware('isadmin');
            Route::get('petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
            Route::post('petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
            Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
            Route::put('petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
            Route::get('petugas/destroy/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

        });
        
    });
});

Route::group(['middleware' => ['guest:admin']], function(){

    Route::get('admin/login', [AdminLoginController::class,'index'])->name('admin.login');
    Route::post('admin/login/store', [AdminLoginController::class,'store'])->name('admin.login.store');
    
    // Route::get('admin/register', [AdminRegisterController::class,'index'])->name('admin.register');
    // Route::post('admin/register/store', [AdminRegisterController::class,'store'])->name('admin.register.store');
});








