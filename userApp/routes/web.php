<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['admin']], function () {
    Route::post('/Admin', [App\Http\Controllers\CertificateController::class,'addCer']);
    Route::get('/Admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('list',[App\Http\Controllers\UserCertificateController::class,'listCertificates']);
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('certificateDelete/{id}', [App\Http\Controllers\UserCertificateController::class,'destroy'])->name('certificateDelete');
    Route::get('userCertificates', [App\Http\Controllers\UserCertificateController::class, 'listCertificates'])->name('Admin');
    Route::get('approval', function () {
        return view('approval');
    } );
    Route::get('dashboard', function () {
        return view('dashboard');
    } )->name('dashboard');
    
    Route::get('usercertificates/{id}', [App\Http\Controllers\UserCertificateController::class,'addCer'])->name('usercertificates');
    Route::get('certificates', [App\Http\Controllers\CertificateController::class, 'dropDownShow'])->name('certificates');
    Route::get('status/{id}', [App\Http\Controllers\HomeController::class, 'status'])->name('status');
});
