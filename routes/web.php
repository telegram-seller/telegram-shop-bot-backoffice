<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("login", [AuthController::class, "loginPage"])->name("loginPage");
Route::post("login", [AuthController::class, "login"])->name("login");

Route::middleware("auth")->group(function() {
    Route::get("dashboard", [Controller::class, "dashboard"])->name("dashboard");

    Route::resource("messages", MessageController::class);
});