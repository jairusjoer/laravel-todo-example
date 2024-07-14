<?php

namespace App\Livewire\Components\Todo;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\Attributes\On;

class Table extends Component
{
    public Collection $todos;
    public array $where = [];

    #[On(['todo.create', 'todo.delete', 'todo.done', 'todo.undo'])]
    public function render()
    {
        $this->todos = Todo::where(...$this->where)->get()->reverse();

        return view('livewire.components.todo.table');
    }
}
