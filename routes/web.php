<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebBlogController;
use App\Http\Controllers\SigninController;
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

Route::get('', [WebBlogController::class, 'showSignupForm']);
Route::get('signin', [WebBlogController::class, 'showSigninForm']);

Route::post('signin-2', [WebBlogController::class, 'signup']);

Route::post('check', [SigninController::class, 'check']);
Route::get('/home', [SigninController::class, 'home'])->name('home');
