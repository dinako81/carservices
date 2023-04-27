<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController as C;

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
});


Route::prefix('cats')->name('cats-')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index');
    Route::get('/create', [C::class, 'create'])->name('create');
    Route::post('/create', [C::class, 'store'])->name('store');
    Route::get('/{cat}', [C::class, 'show'])->name('show');
    Route::get('/edit/{cat}', [C::class, 'edit'])->name('edit');
    Route::put('/edit/{cat}', [C::class, 'update'])->name('update');
    Route::delete('/delete/{cat}', [C::class, 'destroy'])->name('delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');