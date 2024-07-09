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
        return Todo::all();
    }
    public function update(Request $request, string $type, int $id)
    {
        $todo = Todo::find($id);
        switch ($type) {
            case 'done':
                $todo->done = true;
                break;
            case 'undo':
                $todo->done = false;
                break;
            case 'text':
                $todo->text = $request->string('text')->trim();
                break;
        }
        $todo->save();

        return redirect()->back();
    }
    public function delete(int $id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }
}
