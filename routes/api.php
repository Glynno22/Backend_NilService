<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendeursController;

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


//Vendeur
Route::get('ListeMarketV',[VendeursController::class,'index']);
Route::post('CreateMarketV',[VendeursController::class,'store']);
Route::get('SearchMarketV/{id}',[VendeursController::class,'show']);
Route::put('UpdateMarketV/{id}',[VendeursController::class,'update']);
Route::delete('DeleteMarketV/{id}',[VendeursController::class,'destroy']);
Route::put('Activer_ou_DesactiverchMarketV/{id}',[VendeursController::class,'toggleActivation']);
