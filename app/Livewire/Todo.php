<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public $todo = Todo::class;

    public function render()
    {
        return view('livewire.todo');
    }
}
