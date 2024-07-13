@extends('layouts.root')

@section('root')
    <main class="py-12 max-w-xl mx-auto">
        <header>
            <h1 class="font-medium">Todos</h1>

            <form method="POST" action="/todos/create">
                @csrf
                <input name="text" type="text" placeholder="Add a todo...">
                <button>Create</button>
            </form>
        </header>
        <section>
            @foreach ($todos->where('done', 0) as $todo)
                <livewire:todo :$todo :key="$todo->id" />
            @endforeach
        </section>
        <section class="mt-12">
            <h2 class="font-medium">Done</h2>
            @foreach ($todos->where('done', 1) as $todo)
                <livewire:todo :$todo :key="$todo->id" />
            @endforeach
        </section>
    </main>
@endsection
