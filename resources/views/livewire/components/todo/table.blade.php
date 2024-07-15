<?php
use App\Models\Todo;
use function Livewire\Volt\{state, on};

state(['data' => []])->reactive();

?>

<div class="space-y-3">
    @forelse ($data as $todo)
        <livewire:components.todo.item :$todo :key="$todo->id" />
    @empty
        <div class="border border-dashed rounded-xl p-2 leading-4" x-data="todo">
            <p class="p-2 text-center font-medium text-small">Nothing (to be) done 🎉</p>
        </div>
    @endforelse
</div>
