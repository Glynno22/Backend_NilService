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

Route::get('listeClient',[ClientControllers::class,'index']);
Route::post('creeClient',[ClientControllers::class,'store']);
Route::get('rechercheClient/{id}',[ClientControllers::class,'show']);
Route::put('updateClient/{id}',[ClientControllers::class,'update']);
Route::delete('suppresionClient/{id}',[ClientControllers::class,'destroy']);
