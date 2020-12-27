<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\sAlimentosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("register",[UserController::class,'register']);
Route::post("login",[UserController::class,'login']);

Route::get("lista",[sAlimentosController::class,'lista']);
Route::get("search/{parametro}",[sAlimentosController::class,'search']);

//http://127.0.0.1:8000/api/search/
//Route::get("data",[dummy::class,'getData']);
//Route::apiResource('alimento','AlimentosController');
