<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RestritoController;


Route::get("/", [SiteController::class, 'site']) -> name('site');

Route::resource('usuario', UsuarioController::class);

Route::controller(RestritoController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');//fazer o login utilizando o store
    Route::get('/logout', 'destroy')->name('login.destroy');

});


