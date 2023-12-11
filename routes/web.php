<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[TodoController::class,"index"])->name("index");
Route::get("/submit",[TodoController::class,"submit"])->name("submit.form");
Route::get("/submit/{id}",[TodoController::class,"del"])->name("submit.del");
Route::get("/edit/{id}",[TodoController::class,"edit"])->name("submit.edit");
Route::post("/update/{id}",[TodoController::class,"update"])->name("submit.update");