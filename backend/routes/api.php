<?php

use App\Http\Controllers\TablazatController;
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

Route::get('tablazats', [TablazatController::class , 'index']);
Route::get('tablazats/{id}', [TablazatController::class , 'show']);
Route::post('tablazats', [TablazatController::class , 'store']);
Route::put('tablazats/{id}', [TablazatController::class , 'update']);
Route::delete('tablazats/{id}', [TablazatController::class , 'destroy']);