<?php

use App\Http\Controllers\user_functions;
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
Route::get('dashboard', [user_functions::class, "dashboard"]);
Route::view('signup', "create");
Route::view('signin', "login");
Route::post('store', [user_functions::class, "store"]);
Route::get('edit/{id}', [user_functions::class, "edit"]);
Route::post('update', [user_functions::class, "update"]);
Route::get('delete/{id}', [user_functions::class, "delete"]);
Route::post('login', [user_functions::class, "login"]);
