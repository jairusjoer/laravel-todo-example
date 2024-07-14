<?php

use App\Http\Controllers\TodosController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['todos' => Todo::all()]);
});
