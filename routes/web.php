<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [IndexController::class, "index"])->name("index");

Route::get("/dashboard", [DashboardController::class, "index"])->middleware("check_login")->name("dashboard");

Route::prefix("/auth")->as("auth.")->group(function () {

    Route::get("/register", [AuthController::class, "register"])->middleware("check_user")->name("register");

    Route::post("/register", [AuthController::class, "registerPost"])->name("register_post");

    Route::get("/login", [AuthController::class, "login"])->middleware("check_user")->name("login");

    Route::post("/login", [AuthController::class, "loginPost"])->name("login_post");

    Route::get("/logOut", [AuthController::class, "logOut"])->middleware("check_login")->name("logOut");
});


Route::prefix("/task")->as("task.")->group(function () {

    Route::get("/create", [TaskController::class, "create"])->middleware("check_login")->name("create");
    
    Route::post("/create", [TaskController::class, "createPost"])->middleware("check_login")->name("createPost");


});
