<?php

namespace App\Livewire\Components;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\Attributes\On;

class Todos extends Component
{
    public Collection $todos;
    public array $where;

    #[On(['todo.delete', 'todo.done', 'todo.undo'])]
    public function render()
    {
        $this->todos = Todo::where(...$this->where)->get();
        return view('livewire.components.todos');
    }

}
