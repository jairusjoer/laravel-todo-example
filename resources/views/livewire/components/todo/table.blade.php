<?php
use App\Models\Todo;
use function Livewire\Volt\{state, on};

$fetch = fn() => ($this->todos = Todo::where(...$this->where)->get()->reverse());

state([
    'todos' => $fetch,
    'where' => [],
]);

on([
    'todo.create' => $fetch,
    'todo.done' => $fetch,
    'todo.undo' => $fetch,
    'todo.delete' => $fetch,
]);
?>

<div class="space-y-3">
    @foreach ($todos as $todo)
        <livewire:components.todo.item :$todo :key="$todo->id" />
    @endforeach
</div>
