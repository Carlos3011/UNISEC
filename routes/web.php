<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'inicio'])->name('inicio');
Route::get('/acerca-de', [PublicController::class, 'acerca'])->name('acerca');
Route::get('/ofertas', [PublicController::class, 'ofertas'])->name('ofertas');
Route::get('/miembros', [PublicController::class, 'miembros'])->name('miembros');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/contacto', [PublicController::class, 'contacto'])->name('contacto');

