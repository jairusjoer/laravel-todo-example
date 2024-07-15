<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount};

state(['todo', 'text' => '']);

mount(fn () => ($this->text = $this->todo->text));

// C R U D opertaions

$update = function (string $type) {
    switch ($type) {
        case 'text':
            $this->todo->update(['text' => $this->text]);
            break;
        case 'done':
            $this->todo->update(['done' => true]);
            break;
        case 'undo':
            $this->todo->update(['done' => false]);
            break;
    }
    $this->dispatch('todo.update');
};

$delete = function () {
    $this->todo->delete();
    $this->dispatch('todo.delete');
};
?>

<div
    class="flex gap-10 rounded-xl border p-2 leading-4 text-foreground"
    x-data="todo"
>
    <button
        x-ref="output"
        class="truncate p-2 text-left"
        x-on:click="focus"
        x-show="!edit"
        title=" Click to edit: {{ $todo->text }}"
    >
        {{ $todo->text }}
    </button>

    <form
        class="flex grow items-center gap-1"
        wire:submit="update('text')"
        x-on:submit="blur"
        x-cloak
        x-show="edit"
        x-on:click.outside="edit = false"
    >
        @csrf
        <input
            x-ref="input"
            wire:model="text"
            class="h-8 grow truncate rounded bg-background p-2 outline-brand"
            type="text"
            placeholder="{{ $todo->text }}"
        />
        <button class="button-button-solid" title="Update">
            <livewire:components.icon variant="pencil" />
        </button>
    </form>

    <div class="ml-auto flex gap-1">
        @if ($todo->done == 1)
            <button
                class="button-cautionary-muted"
                wire:click="update('undo')"
                title="Undo"
            >
                <livewire:components.icon variant="undo-2" />
            </button>
        @else
            <button
                class="button-successful-muted"
                wire:click="update('done')"
                title="Done"
            >
                <livewire:components.icon variant="check" />
            </button>
        @endif
        <button
            class="button-destructive-muted"
            wire:click="delete"
            title="Delete"
        >
            <livewire:components.icon variant="trash" />
        </button>
    </div>
</div>
