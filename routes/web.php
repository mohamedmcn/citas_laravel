<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

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
    return view('inicio');
});
//Route::get('/citas', function () {
   // return view('citas');
//});
Route::get('citas',[CitaController::class,'index'])->name('citas');
Route::get('mis_citas',[CitaController::class,'usr_citas'])->middleware(['auth'])->name('mis_citas');
Route::get('/dashboard', function () {
    return view('inicio');
});
Route::get('/propuestas', function () {
    return view('propuestas');
});
Route::get('/donde', function () {
    return view('donde');
});
Route::post('propuesta',[CitaController::class,'store'])->name('propuesta');
Route::post('actualizar',[CitaController::class,'update'])->name('actualizar');
Route::delete('eliminar',[CitaController::class,'destroy'])->name('eliminar');
Route::get('/propuestas', function () {
    return view('propuestas');
});
//->middleware(['auth'])->name('inicio')
require __DIR__.'/auth.php';
