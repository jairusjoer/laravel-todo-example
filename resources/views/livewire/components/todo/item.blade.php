<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount};

state([
    'todo',
    'text' => '',
]);

mount(fn() => ($this->text = $this->todo->text));

// C R U D opertaions

$update = function (string $type)
{
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

$delete = function ()
{
    $this->todo->delete();
    $this->dispatch('todo.delete');
};
?>

<div class="flex gap-9 border rounded-xl p-2 leading-4" x-data="todo">

    <button x-ref="output" class="p-2 text-left truncate" x-on:click="focus" x-show="!edit" title="{{ $todo->text }}">
        {{ $todo->text }}
    </button>

    <form class="grow flex gap-1 items-center" wire:submit="update('text')" x-on:submit="blur" x-cloak x-show="edit"
        x-on:click.outside="edit = false">
        @csrf
        <input x-ref="input" wire:model="text" class="grow h-8 p-2 rounded outline-brand bg-muted" type="text"
            placeholder="{{ $todo->text }}">
        <button class="button-brand-muted" title="Update"><livewire:components.icon variant="pencil" /></button>
    </form>

    <div class="ml-auto flex gap-1">
        @if ($todo->done == 1)
            <button class="button-cautionary-muted" wire:click="update('undo')" title="Undo"><livewire:components.icon
                    variant="undo-2" /></button>
        @else
            <button class="button-successful-muted" wire:click="update('done')" title="Done"><livewire:components.icon variant="check" /></button>
        @endif
        <button class="button-destructive-muted" wire:click="delete" title="Delete"><livewire:components.icon variant="trash" /></button>
    </div>
</div>
