<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProposalController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/proposal', [ProposalController::class, 'index']);
    Route::get('/proposal/{proposal}', [ProposalController::class, 'show']);
    Route::post('/proposal', [ProposalController::class, 'store']);
    Route::patch('/proposal/{proposal}', [ProposalController::class, 'update']);
    Route::delete('/proposal/{proposal}', [ProposalController::class, 'destroy']);
});
