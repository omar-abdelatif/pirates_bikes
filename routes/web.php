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
Route::get('create', [user_functions::class, "create"]);
Route::post('store', [user_functions::class, "store"]);
Route::get('dashboard', [user_functions::class, "dashboard"]);