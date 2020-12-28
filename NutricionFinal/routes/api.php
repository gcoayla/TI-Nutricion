<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsumerController;

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

Route::get("prueba",[sAlimentosController::class,'prueba']);

Route::get("desayuno",[ConsumerController::class,'getDesayuno']);
Route::get("almuerzo",[ConsumerController::class,'getAlmuerzo']);
Route::get("cena",[ConsumerController::class,'getCena']);
Route::get("aperitivos",[ConsumerController::class,'getAperitivos']);

Route::get("valores",[ConsumerController::class,'getValores']);
/*Route::get("proteias",[ConsumerController::class,'getProteinas']);
Route::get("carbohidratos",[ConsumerController::class,'getCarbohidratos']);
Route::get("grasas",[ConsumerController::class,'getGrasas']);*/

Route::post("consum",[ConsumerController::class,'agregar_desayuno']);
//Route::post('cos','ConsumerController@agregar_desayuno');
/*Route::post("consum2",[ConsumerController::class,'agregar_almuerzo']);
Route::post("consum3",[ConsumerController::class,'agregar_cena']);
Route::post("consum4",[ConsumerController::class,'agregar_aperitivo']);*/


//http://127.0.0.1:8000/api/search/
//Route::get("data",[dummy::class,'getData']);
//Route::apiResource('alimento','AlimentosController');
