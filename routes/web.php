<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class)->name('home');

//Solo contenido estático, por eso se utiliza view:
Route::view('nosotros', 'nosotros')->name('nosotros');


//Esta ruta equivale a las 7 restantes:
//Route::resource('cursos', CursoController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name(('cursos.edit'));

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name(('cursos.update'));

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

