<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount, on};

$fetch = function () {
    $query = Todo::all()
        ->reverse()
        ->groupBy('done');

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
        <main class="mx-auto max-w-xl px-6 py-12">
            <header>
                <h1
                    class="mb-12 text-center text-h5 font-medium text-foreground"
                >
                    Todo 📓
                </h1>
                <h2 class="mb-1.5 ml-4 text-small font-medium">New Todo</h2>
                <livewire:components.todo.create />
            </header>
            <section class="mt-6">
                <h2 class="mb-1.5 ml-4 text-small font-medium">
                    To be done ({{ count($open) }})
                </h2>
                <livewire:components.todo.table :data="$open" />
            </section>
            <section class="mt-6">
                <h2 class="mb-1.5 ml-4 text-small font-medium">
                    Done ({{ count($done) }})
                </h2>
                <livewire:components.todo.table :data="$done" />
            </section>
        </main>
    @endvolt
@endsection
