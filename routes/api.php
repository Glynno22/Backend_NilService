<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

//********* * les routes pour le model Prestataire*******

Route::get('listePrestataire',[PrestatairesController::class,'index']);
Route::post('creePrestataire',[PrestatairesController::class,'store']);
Route::get('recherchePrestataire/{id}',[PrestatairesController::class,'show']);
Route::put('updatePrestataire/{id}',[PrestatairesController::class,'update']);
Route::delete('suppresionPrestataire/{id}',[PrestatairesController::class,'destroy']);
