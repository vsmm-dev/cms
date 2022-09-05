<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::group(['prefix'=>'admin',  'middleware' => 'IsAdmin'], function(){
    Route::get("/", [AdminController::class, "getDashboard"]);
    Route::get("create-user", [AdminController::class, "createUser"]);
    Route::get("list-users", [AdminController::class, "listUsers"]);
    Route::get("edit-user", [AdminController::class, "editUser"]);
});
