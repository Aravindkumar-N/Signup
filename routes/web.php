<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebBlogController;

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

Route::get('/', [WebBlogController::class, 'showSignupForm']) ->name('signup');

Route::post('/signin', [WebBlogController::class, 'signup'])->name('signup.submit');
