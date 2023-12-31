<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RestritoController;
use App\Http\Controllers\VideoAulasController;


Route::get("/", [SiteController::class, 'site']) -> name('site');



Route::controller(RestritoController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');//fazer o login utilizando o store
    Route::get('/logout', 'destroy')->name('login.destroy');
});

//!ROTAS PROTEGIDAS

Route::middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('usuario', UsuarioController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('videoAulas', VideoAulasController::class);
});


