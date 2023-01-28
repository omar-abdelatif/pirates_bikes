<?php

use App\Http\Controllers\SuperAdmin_functions;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "auth"], function () {
    Route::get('dashboard', [SuperAdmin_functions::class, "dashboard"]);
    Route::get('edit/{id}', [SuperAdmin_functions::class, "edit"]);
    Route::post('update', [SuperAdmin_functions::class, "update"]);
    Route::get('delete/{id}', [SuperAdmin_functions::class, "delete"]);
    Route::post('logout', [SuperAdmin_functions::class, "logout"]);
});

Route::view('/', 'welcome');
Route::post('store', [SuperAdmin_functions::class, "store"]);
Route::view('signup', "create");

Route::get('login', [SuperAdmin_functions::class, "login"])->name("login");
Route::post('signinrequest', [SuperAdmin_functions::class, "signinrequest"]);
