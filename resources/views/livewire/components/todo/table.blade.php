<div class="space-y-3">
    @foreach ($todos as $todo)
        <livewire:components.todo.item :$todo :key="$todo->id" />
    @endforeach
</div>
