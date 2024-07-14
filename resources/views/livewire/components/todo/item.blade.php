<div class="flex gap-9 border rounded-xl p-2 leading-4" x-data="todo">

    <button x-ref="output" class="p-2 text-left truncate" x-on:click="focus" x-show="!edit" title="{{ $todo->text }}">
        {{ $todo->text }}
    </button>

    <form class="grow flex gap-1 items-center" wire:submit="update" x-on:submit="blur" x-cloak x-show="edit"
        x-on:click.outside="edit = false">
        @csrf
        <input x-ref="input" wire:model="text" class="grow h-8 p-2 rounded outline-brand bg-muted" type="text"
        placeholder="{{ $todo->text }}">
        <button class="button-brand-muted" title="Update"><x-icon variant="pencil" /></button>
    </form>

    <div class="ml-auto flex gap-1">
        @if ($todo->done == 1)
            <button class="button-cautionary-muted" wire:click="undo" title="Undo"><x-icon variant="undo-2" /></button>
        @else
            <button class="button-successful-muted" wire:click="done" title="Done"><x-icon variant="check" /></button>
        @endif
        <button class="button-destructive-muted" wire:click="delete" title="Delete"><x-icon variant="trash" /></button>
    </div>
</div>
