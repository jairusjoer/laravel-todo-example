<div class="flex gap-4 border rounded-xl p-4 bg-zinc-100">
    <form method="POST" action="/todos/update/text/{{ $todo->id }}">
        @csrf
        <input name="text" class="bg-transparent focus:bg-white" type="text" value="{{ $todo->text }}"
            placeholder="{{ $todo->text }}">
        <button>Update</button>
    </form>
    @if ($todo->done == 1)
        <button action="/todos/update/undo/{{ $todo->id }}">Undo</a>
    @else
        <button action="/todos/update/done/{{ $todo->id }}">Done</a>
    @endif
        <button action="/todos/delete/{{ $todo->id }}">Delete</a>
</div>
