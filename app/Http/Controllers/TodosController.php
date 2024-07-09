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
    public function update(string $type, int $id)
    {

        $todo = Todo::find($id);
        switch ($type) {
            case 'done':
                $todo->done = true;
                break;
            case 'undo':
                $todo->done = false;
                break;
        }
        $todo->save();

        return redirect()->back();
    }
    public function delete(int $id)
    {
    }
}
