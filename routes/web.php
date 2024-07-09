<?php

use App\Http\Controllers\TodosController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['todos' => Todo::all()]);
});


Route::post('/todos/create', [TodosController::class, 'create']);
Route::get('/todos/read', [TodosController::class, 'read']);
Route::post('/todos/update/{type}/{id}', [TodosController::class, 'update']);
Route::post('/todos/delete/{id}', [TodosController::class, 'delete']);