<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\AuteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get("/getLivres", [LivreController::class, "getLivres"]);
Route::get("/getLivre/{id}", [LivreController::class, "getLivre"]);
Route::post("/createLivre", [LivreController::class, "createLivre"]);
Route::put("/updateLivre/{id}", [LivreController::class, "updateLivre"]);
Route::delete("/deleteLivre/{id}", [LivreController::class, "DeleteLivre"]);

// route auteur
Route::get("/GetAuteur", [AuteurController::class, "GetAuteur"]);
Route::get("/GetFindAuteur/{id}", [AuteurController::class, "GetFindAuteur"]);
Route::post("/CreateAuteur", [AuteurController::class, "CreateAuteur"]);
Route::put("/UpdateAuteur/{id}", [AuteurController::class, "UpdateAuteur"]);
Route::delete("/deleteAuteur/{id}", [AuteurController::class, "deleteAuteur"]);
