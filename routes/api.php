<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Drink;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\IdController;
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

Route::get('drink', [DrinkController::class, 'index']);
Route::get('Iddrink', [IdController::class, 'getId']);
Route::post('drink', [DrinkController::class, 'create']);
Route::put('drink', [DrinkController::class, 'update']);
Route::delete('drink', [DrinkController::class, 'delete']);
