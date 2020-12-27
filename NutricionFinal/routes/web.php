<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', HomeController::class);

Route::post("login",[UserController::class, 'login']);

Route::get("/home/{user}", HomeController::class);

Route::get('/a',function(){

    $user = App\Models\User::findOrFail(2);

    return $user->alimento;

});


Route::post("/alimento", [HomeController::class, 'store'])->name('alimento.store');

Route::get("/login", [HomeController::class, 'login']);
