<div class="flex gap-4 border rounded-xl p-4 bg-zinc-100">
    <form action="">
        <input class="bg-transparent focus:bg-white" type="text" value="{{ $todo->text }}"
            placeholder="{{ $todo->text }}">
        <button>Update</button>
    </form>
    @if ($todo->done == 1)
        <a href="/todos/update/undo/{{ $todo->id }}">Undo</a>
    @else
        <a href="/todos/update/done/{{ $todo->id }}">Done</a>
    @endif
    <button class="ml-auto">Delete</button>
</div>
