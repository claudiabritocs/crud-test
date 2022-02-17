<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaInicialController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EditarController;

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

// ROUTES - GET

Route::get('/', [PaginaInicialController::class, 'index'])
    ->middleware(['auth'])->name('index');

Route::get('/cadastro', [CadastroController::class, 'index'])
    ->middleware(['auth'])->name('cadastro');

Route::get('/remover/{id}', [EditarController::class, 'index'])
    ->middleware(['auth'])->name('editar.list');

Route::get('/adicionar/{id}', [EditarController::class, 'index2'])
    ->middleware(['auth'])->name('editar.list2');

Route::get('/atualizar/{id}', [EditarController::class, 'edit'])
    ->middleware(['auth'])->name('atualizar');

Route::get('/error', [EditarController::class, 'error'])
    ->middleware(['auth'])->name('error');

Route::get('/relatorio', [PaginaInicialController::class, 'relatorio'])
    ->middleware(['auth'])->name('relatorio');

// ROUTES - POST

Route::post('/store', [CadastroController::class, 'store'])
    ->middleware(['auth'])->name('store');

Route::post('/att', [PaginaInicialController::class, 'store'])
    ->middleware(['auth'])->name('relatorio.store');


// ROUTES - PUT

Route::put('/update/{id}', [EditarController::class, 'update'])
    ->middleware(['auth'])->name('update');

Route::put('/increment/{id}', [EditarController::class, 'increment'])
    ->middleware(['auth'])->name('increment');

Route::put('/decrement/{id}', [EditarController::class, 'decrement'])
    ->middleware(['auth'])->name('decrement');

// ROUTES - DELETE

Route::delete('/destroy/{id}', [EditarController::class, 'destroy'])
    ->middleware(['auth'])->name('destroy');


require __DIR__.'/auth.php';
