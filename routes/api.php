<?php
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('categories', [CategoryController::class, 'index']);
// Route::get('categories/{category}', [CategoryController::class, 'show']);


Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::apiResource('categories',CategoryController::class);
    Route::apiResource('transactions',TransactionController::class);
});


Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

