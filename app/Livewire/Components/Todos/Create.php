<?php

namespace App\Livewire\Components\Todos;

use App\Models\Todo;
use Livewire\Component;

class Create extends Component
{
    public string $text = '';

    public function render()
    {
        return view('livewire.components.todos.create');
    }

    // C R U D opertaions

    public function create()
    {

        $validated = $this->validate([
            'text' => 'required|min:1',
        ]);

        Todo::create([
            'text' => $validated['text'],
            'done' => false,
        ]);

        $this->dispatch('todo.create');
    }
}
