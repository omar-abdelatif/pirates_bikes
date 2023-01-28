<?php

use App\Http\Controllers\SuperAdmin_functions;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "auth"], function () {
});
Route::post('store', [SuperAdmin_functions::class, "store"]);
Route::get('edit/{id}', [SuperAdmin_functions::class, "edit"]);
Route::post('update', [SuperAdmin_functions::class, "update"]);
Route::get('delete/{id}', [SuperAdmin_functions::class, "delete"]);
Route::get('signin', [SuperAdmin_functions::class, "signin"]);

Route::get('dashboard', [SuperAdmin_functions::class, "dashboard"]);


Route::view('/', 'welcome');
Route::view('login', "login")->name("login");
Route::view('signup', "create");
