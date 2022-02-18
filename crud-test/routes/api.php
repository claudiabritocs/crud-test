<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('solicitar-produtos', [ApiController::class, 'index']);
Route::get('solicitar-produtos/{id}', [ApiController::class, 'show']);

Route::put('baixar-produtos/{id}', [ApiController::class, 'update1']);
Route::put('adicionar-produtos/{id}', [ApiController::class, 'update2']);

