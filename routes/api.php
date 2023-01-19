<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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
Route::post('/users', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/books', [BookController::class, 'store']);
// Route::resource('/student_information', StudentInformationController::class);
// Route::get('/books/{id}', [BookController::class, 'showAllBooks']);
// Route::delete('/books/{id}', [BookController::class, 'destroy']);
// Route::put('/books/{id}', [BookController::class, 'update']);

// Route::resource('/books', BookController::class);
// Route::middleware(['auth:sanctum', 'ver'])->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware('auth:sanctum')->group( function () {
    // Route::resource('/books', BookController::class);
     
    Route::post('/books', [BookController::class, 'store']);
    Route::get('/books', [BookController::class, 'showAllBooks']);
    Route::get('/books/{id}', [BookController::class, 'show']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
    Route::put('/books/{id}', [BookController::class, 'update']);
   
    
});