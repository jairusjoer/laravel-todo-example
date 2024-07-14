<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount, on};

$fetch = function () {
    $query = Todo::all()->reverse()->groupBy('done');

    $this->open = $query->get(0);
    $this->done = $query->get(1);
};

state([
    'open' => [],
    'done' => [],
]);

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
        <main class="py-12 max-w-xl mx-auto">
            <header>
                <h2 class="mb-1.5 font-medium">New Todo</h1>
                    <livewire:components.todo.create />
            </header>
            <section class="mt-6">
                <h2 class="mb-1.5 font-medium">To be done ({{ $open->count() }})</h1>
                    <livewire:components.todo.table :data="$open" />
            </section>
            <section class="mt-6">
                <h2 class="mb-1.5 font-medium">Done ({{ $done->count() }})</h2>
                <livewire:components.todo.table :data="$done" />
            </section>
        </main>
    @endvolt
@endsection
