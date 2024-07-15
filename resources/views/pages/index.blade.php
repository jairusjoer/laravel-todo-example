<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount, on};

$fetch = function () {
    $query = Todo::all()->reverse()->groupBy('done');

    $this->open = $query->get(0) ?? [];
    $this->done = $query->get(1) ?? [];
};

state(['open', 'done']);

mount($fetch);

on([
    'todo.create' => $fetch,
    'todo.update' => $fetch,
    'todo.delete' => $fetch,
]);
?>

@extends('layouts.root')

@section('root')
    @volt('index')
        <main class="py-12 px-6 max-w-xl mx-auto">
            <header>
                <h1 class="mb-12 text-h5 text-center text-foreground font-medium">Todo 📓</h1>
                <h2 class="ml-4 mb-1.5 font-medium text-small">New Todo</h1>
                    <livewire:components.todo.create />
            </header>
            <section class="mt-6">
                <h2 class="ml-4 mb-1.5 font-medium text-small">To be done ({{ count($open) }})</h1>
                    <livewire:components.todo.table :data="$open" />
            </section>
            <section class="mt-6">
                <h2 class="ml-4 mb-1.5 font-medium text-small">Done ({{ count($done) }})</h2>
                <livewire:components.todo.table :data="$done" />
            </section>
        </main>
    @endvolt
@endsection
