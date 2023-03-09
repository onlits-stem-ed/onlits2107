<?php

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'welcome');

Route::view('/template', 'template');


//----------------------------------------------------------------------
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function() {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);


//----------------------------------------------------------------------

Route::post('/new', [ResumeController::class, 'new']);

Route::post('/update', [ResumeController::class, 'update']);