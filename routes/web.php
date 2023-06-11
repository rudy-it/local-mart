<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => ['web', 'cekuser:1']],
// function(){

// });
Route::name('login')->get('/login', [LoginController::class, 'showLoginForm']);

Route::get('/', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('cekuser');