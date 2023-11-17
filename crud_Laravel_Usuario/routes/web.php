<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('index');
});

Route::get('/', [UsuarioController::class, 'index'])->name('users.index');
Route::get('/user/create', [UsuarioController::class, 'create'])->name('users.create');
Route::post('user',[UsuarioController::class,'store'])->name('users.store');
Route::get('user/{user}/edit',[UsuarioController::class,'edit'])->name('users.edit');
Route::put('user/{user}',[UsuarioController::class,'update'])->name('users.update');
Route::delete('user/{user}',[UsuarioController::class,'destroy'])->name('users.destroy');

/* Exportar Usuario/s */

Route::get('/export_user_pdf',[UsuarioController::class,'export_user_pdf'])->name('export_user_pdf');
Route::get('/export-user/{id}', [UsuarioController::class,'export_user'])->name('export_user');


