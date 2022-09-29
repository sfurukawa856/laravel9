<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
Route::get('/home', function () {
	return view('home');
});

Route::middleware('guest')->group(function () {
	Route::controller(RegisterController::class)->group(function () {
		Route::get('/register', 'create');
		Route::post('/register', 'store');
	});

	Route::controller(LoginController::class)->group(function () {
		Route::get('/login', 'index');
		Route::post('/login', 'authenticate');
	});
});

Route::middleware('auth')->group(function () {
	Route::controller(LoginController::class)->group(function () {
		Route::get('/logout', 'logout');
	});
});
