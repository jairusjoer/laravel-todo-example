@extends('layouts.root')

@section('root')
    <main class="py-12 max-w-xl mx-auto">
        <header>
            <h2 class="mb-1.5 font-medium">New Todo</h1>
                <livewire:todo-create />
        </header>
        <section class="mt-6">
            <h2 class="mb-1.5 font-medium">To be done</h1>
                <livewire:components.todos :where="['done', 0]" />
        </section>
        <section class="mt-6">
            <h2 class="mb-1.5 font-medium">Done</h2>
            <livewire:components.todos :where="['done', 1]" />
        </section>
    </main>
@endsection
