<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\StudentController as StudentV1;
use App\Http\Controllers\Api\V1\BookController;
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
Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);

Route::apiResource('v1/student', StudentV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{$id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{$id}', [BookController::class, 'update']);
Route::delete('/books/{$id}', [BookController::class, 'destroy']);