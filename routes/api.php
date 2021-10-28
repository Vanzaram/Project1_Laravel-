<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('books',[App\Http\Controllers\BookController::class, 'index']);
Route::post('books',[App\Http\Controllers\BookController::class, 'store']);
Route::get('books/{id}',[App\Http\Controllers\BookController::class, 'show']);
Route::put('books/{id}',[App\Http\Controllers\BookController::class, 'update']);
Route::delete('books/{id}',[App\Http\Controllers\BookController::class, 'destroy']);

Route::post('/register', [AuthController::class, 'register']);
// routes/api.php

Route::post('/login', [AuthController::class, 'login']);
// routes/api.php

Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

