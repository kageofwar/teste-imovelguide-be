<?php

use App\Http\Controllers\CorretorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('corretores', [CorretorController::class, 'index']);
Route::get('corretor/{id}', [CorretorController::class, 'search']);
Route::post('corretor', [CorretorController::class, 'store']);
Route::post('corretor/{id}', [CorretorController::class, 'edit']);
Route::delete('corretor/{id}', [CorretorController::class, 'delete']);
