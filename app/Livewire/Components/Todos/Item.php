<?php

namespace App\Livewire\Components\Todos;

use App\Models\Todo as TodoModel;
use Livewire\Component;

class Item extends Component
{
    public TodoModel $todo;
    public string $text;

    // Lifecycle

    public function mount()
    {
        $this->text = $this->todo->text;
    }

    public function render()
    {
        return view('livewire.components.todos.item');
    }

    // C R U D opertaions

    public function update()
    {
        $this->todo->update(['text' => $this->text]);
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('todo.delete');
    }

    // Additional opertaions

    public function done()
    {
        $this->todo->update(['done' => true]);
        $this->dispatch('todo.done');
    }

    public function undo()
    {
        $this->todo->update(['done' => false]);
        $this->dispatch('todo.undo');
    }
}
