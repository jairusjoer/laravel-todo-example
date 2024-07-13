<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\Attributes\On;

class Todos extends Component
{
    public Collection $todos;

    public function mount() {
        $this->todos ??= Todo::all();
    }

    #[On('delete')]
    public function render()
    {
        return view('livewire.todos');
    }
}
