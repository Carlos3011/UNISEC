<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/acerca', 'acerca')->name('acerca');
    Route::get('/ofertas', 'ofertas')->name('ofertas');
    Route::get('/miembros', 'miembros')->name('miembros');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contacto', 'contacto')->name('contacto');
});
