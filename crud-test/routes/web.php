<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaInicialController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', [PaginaInicialController::class, 'index'])
    ->middleware(['auth'])->name('index');

require __DIR__.'/auth.php';
