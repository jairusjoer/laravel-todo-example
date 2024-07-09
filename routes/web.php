<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::post('/todos/create', [TodosController::class, 'create']);
Route::get('/todos/read', [TodosController::class, 'read']);
Route::post('/todos/update/{id}', [TodosController::class, 'update']);
Route::post('/todos/delete/{id}', [TodosController::class, 'delete']);