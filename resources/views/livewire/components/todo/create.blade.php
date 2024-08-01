<?php
use App\Models\Todo;
use function Livewire\Volt\{state};

state(['text' => '']);

$create = function () {
    $validated = $this->validate(Todo::$rules);

    Todo::create([
        'text' => $validated['text'],
        'done' => false,
    ]);

    $this->dispatch('todo.create');
};
?>

<form
    class="flex grow items-start gap-1 rounded-xl border p-2"
    wire:submit="create"
    x-on:submit="setTimeout(() => $el.reset(), 75)"
>
    @csrf
    <div class="grow">
        <input
            wire:model="text"
            class="h-8 w-full truncate rounded bg-background p-2 text-foreground outline-brand"
            type="text"
            placeholder="Click to create a new Todo..."
            required
        />
        @error('text')
            <div
                class="mt-2 flex gap-1 px-2 text-small leading-4 text-destructive"
            >
                <livewire:components.icon variant="circle-x" />
                {{ $message }}
            </div>
        @enderror
    </div>
    <button class="button-button-solid group" title="Create">
        <livewire:components.icon variant="plus" class="group-hover:animate-wiggle" />
    </button>
</form>
