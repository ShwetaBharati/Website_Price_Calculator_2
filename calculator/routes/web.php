<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\CalculatorController;
use App\Http\Controllers\frontend\DemoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DashboardController::class, 'dashboard']);
// Route::get('posts',[DashboardController::class, 'store'])->name('posts.store');

// Route::get('calculator',[CalculatorController::class, 'calculator']);

// Route::get('demo',[DemoController::class, 'demo']);
