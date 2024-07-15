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

<form class="grow flex items-start gap-1 p-2 border rounded-xl" wire:submit="create"
    x-on:submit="setTimeout(() => $el.reset(), 75)">
    @csrf
    <div class="grow">
        <input wire:model="text" class="w-full h-8 p-2 rounded outline-brand bg-background text-foreground truncate" type="text"
            placeholder="Click to create a new aaa Todo..." required>
        @error('text')
            <div class="mt-2 flex gap-1 leading-4 text-small text-destructive"><livewire:components.icon variant="circle-x" />
                {{ $message }}</div>
        @enderror
    </div>
    <button class="button-button-solid" title="Create"><livewire:components.icon variant="plus" /></button>
</form>
