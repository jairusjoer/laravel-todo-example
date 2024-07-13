<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public ModelsTodo $todo;
    public string $text;

    // Lifecycle

    public function mount()
    {
        $this->text = $this->todo->text;
    }

    public function render()
    {
        return view('livewire.todo');
    }

    // C R U D Operations

    public function update()
    {
        $this->todo->update(['text' => $this->text]);
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('delete')->to(Todos::class);
    }
}
