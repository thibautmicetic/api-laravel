<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products', [ProduitsController::class, "liste"]);
Route::get('product/{id}', [ProduitsController::class, "detail"]);
Route::post('products', [ProduitsController::class, "ajouter"]);
Route::get('commands', [CommandeController::class, "liste"]);
Route::post('commands', [CommandeController::class, "ajouter"]);
Route::get('command/${id}', [CommandeController::class, "listeClient"]);
