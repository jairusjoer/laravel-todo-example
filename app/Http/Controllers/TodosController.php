<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function create(Request $request)
    {
        $todo = new Todo;
        $todo->text = $request->string('text')->trim();
        $todo->done = false;
        $todo->save();

        return redirect()->back();
    }
    public function read()
    {
    }
    public function update(int $id)
    {
    }
    public function delete(int $id)
    {
    }
}
