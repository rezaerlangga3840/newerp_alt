<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//user extras
use App\Http\Controllers\DataSklhController;
use App\Http\Controllers\PermohonanMagangController;


//admin extras
use App\Http\Controllers\MasterSklhController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::group(['prefix'=>'sima'], function(){
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    });
    //hanya bisa diakses user biasa
    Route::group(['prefix'=>'data_sklh'],function(){
        Route::group(['middleware'=>['auth','privileges:operator','schoolverificationstatus:belum','schoolownership','schoolfoundcheck']], function(){
            Route::get('/addsklh',[DataSklhController::class,'addsklh'])->name('user.addsklh');
            Route::post('/addsklh',[DataSklhController::class,'savesklh'])->name('user.savesklh');
        });
        Route::group(['middleware'=>['auth','privileges:operator','schoolverificationstatus:belum,sudah','schoolownership','schoolnotfoundcheck']], function(){
            Route::get('/viewsklh', [DataSklhController::class,'viewsklh'])->name('user.viewsklh');
            Route::get('/editsklh', [DataSklhController::class,'editsklh'])->name('user.editsklh');
            Route::put('/editsklh', [DataSklhController::class,'updatesklh'])->name('user.updatesklh');
        });
    });
    
    Route::group(['middleware'=>['auth','privileges:operator','schoolverificationstatus:sudah','schoolownership','schoolnotfoundcheck']], function(){
        Route::group(['prefix'=>'permohonan_magang'],function(){
            Route::get('/daftar',[PermohonanMagangController::class,'daftar'])->name('permohonan_magang.daftar');
            Route::get('/add',[PermohonanMagangController::class,'add'])->name('permohonan_magang.add');
            Route::post('/add',[PermohonanMagangController::class,'save'])->name('permohonan_magang.save');
            Route::group(['prefix'=>'view/{id}'], function(){
                Route::get('/',[PermohonanMagangController::class,'view'])->name('permohonan_magang.view');
                Route::put('/edit',[PermohonanMagangController::class,'update'])->name('permohonan_magang.update');
                Route::post('/addpesertamagang',[PermohonanMagangController::class,'savepesertamagang'])->name('permohonan_magang.savepesertamagang');
            });
            Route::group(['prefix'=>'psrt_mgng'], function(){
                Route::put('/editpesertamagang/{id}',[PermohonanMagangController::class,'updatepesertamagang'])->name('permohonan_magang.updatepesertamagang');
                Route::delete('/deletepesertamagang/{id}',[PermohonanMagangController::class,'deletepesertamagang'])->name('permohonan_magang.deletepesertamagang');
            });
            Route::delete('/delete/{id}',[PermohonanMagangController::class,'delete'])->name('permohonan_magang.delete');
        });
    });
    //hanya bisa diakses admin
    Route::group(['middleware'=>['auth','privileges:admin']], function(){
        Route::group(['prefix'=>'master_sklh'], function(){
            Route::get('/', [MasterSklhController::class,'daftar'])->name('master_sklh');
            Route::put('/verify/{id}',[MasterSklhController::class,'verification'])->name('master_sklh.verification');
            Route::put('/reset/{id}',[MasterSklhController::class,'resetting'])->name('master_sklh.resetting');
        });
    });
});

//nanti disesuaikan tema
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
