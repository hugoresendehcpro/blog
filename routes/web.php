<?php


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', [\App\Http\Controllers\VueController::class, 'index'])->name('vue');
Route::get('/try-catch', [\App\Http\Controllers\SandBoxController::class, 'trycatch'])->name('trycatch');


Route::resource('/users', UserController::class);
//Route::post('/users-store', [UserController::class,'store'])->name('users.save');


