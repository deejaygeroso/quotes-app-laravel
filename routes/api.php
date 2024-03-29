<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('quotes', [QuoteController::class, 'index']);
Route::get('quotes/{quote}', [QuoteController::class, 'show']);
Route::post('quotes', [QuoteController::class, 'store']);
Route::put('quotes/{quote}', [QuoteController::class, 'update']);
Route::delete('quotes/{quote}', [QuoteController::class, 'delete']);
