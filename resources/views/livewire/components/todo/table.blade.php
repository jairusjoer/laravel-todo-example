<?php
use App\Models\Todo;
use function Livewire\Volt\{state, on};

state(['data' => []])->reactive();

?>

<div class="space-y-3">
    @foreach ($data as $todo)
        <livewire:components.todo.item :$todo :key="$todo->id" />
    @endforeach
</div>
