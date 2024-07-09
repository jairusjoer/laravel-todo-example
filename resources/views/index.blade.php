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
            @foreach ($todos as $todo)
            <x-todo :text="$todo->text" />
            @endforeach
        </section>
        <section class="mt-12">
            <h2 class="font-medium">Done</h2>
            <x-todo />
        </section>
    </main>
@endsection
