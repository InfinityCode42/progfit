<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

use App\Http\Controllers\UsuarioController;

//!SiteController
Route::get("/", [SiteController::class, 'site']) -> name('site');
//!Fim SiteController



//!UsuarioController
Route::get("/usuario",              [UsuarioController::class, 'index'])    -> name('usuario.index');
// Route::get("/usuario/create",       [UsuarioController::class, 'create'])   -> name('usuario.create');
// Route::post("/usuario",             [UsuarioController::class, 'store'])    -> name('usuario.store');
// Route::get("/usuario/{usuario}/show",    [UsuarioController::class, 'show'])     -> name('usuario.show');
// Route::get("/usuario/{usuario}/edit",    [UsuarioController::class, 'edit'])     -> name('usuario.edit');
// Route::put("/usuario/{usuario}",    [UsuarioController::class, 'update'])   -> name('usuario.update');
// Route::delete("/usuario/{usuario}/delete", [UsuarioController::class, 'delete'])   -> name('usuario.delete');

Route::resource('usuario', UsuarioController::class);

//!Fim UsuarioController
