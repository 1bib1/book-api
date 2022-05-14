<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookApiController;

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

//list all books route
Route::get("/books", [BookApiController::class, 'list']);
//list one book
Route::get("/books/{id}", [BookApiController::class, 'show']);
//create book route
Route::post("/books", [BookApiController::class, 'store']);
//update book route
Route::put("/books/{id}", [BookApiController::class, 'update']);
//delete book route
Route::delete("/books/{id}", [BookApiController::class, 'destroy']);


