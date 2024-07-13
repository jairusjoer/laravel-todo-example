<div class="flex gap-4 border rounded-xl p-4 bg-zinc-100">
    <form wire:submit="update">
        @csrf
        <input wire:model="text" class="bg-transparent focus:bg-white" type="text" placeholder="{{ $todo->text }}">
        <button>Update</button>
    </form>
    @if ($todo->done == 1)
        <button action="/todos/update/undo/{{ $todo->id }}">Undo</a>
        @else
            <button action="/todos/update/done/{{ $todo->id }}">Done</a>
    @endif
    <button wire:click="delete">Delete</a>
</div>
