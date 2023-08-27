<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientControllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//********* * les routes pour le model client*******

Route::get('listeClient',[BoutiqueController::class,'index']);
Route::post('creeClient',[BoutiqueController::class,'store']);
Route::get('rechercheClient/{id}',[BoutiqueController::class,'show']);
Route::put('updateClient/{id}',[BoutiqueController::class,'update']);
Route::delete('suppresionClient/{id}',[BoutiqueController::class,'destroy']);
