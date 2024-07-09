@extends('layouts.root')

@section('root')
    <main class="py-12 max-w-xl mx-auto">
        <header>
            <h1 class="font-medium">Todos</h1>
        </header>
        <section>
            <x-todo />
        </section>
        <section class="mt-12">
            <h2 class="font-medium">Done</h2>
            <x-todo />
        </section>
    </main>
@endsection
