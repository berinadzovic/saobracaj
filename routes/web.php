<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])/*->middleware('auth')*/->name('welcome');

Route::get('/parking', [MainController::class, 'parking'])/*->middleware('auth')->*/name('parking');
  
Route::get('/dashboard', function () {
    return view('dashboard');
})/*->middleware(['auth'])*/->name('dashboard');

require __DIR__.'/auth.php';
