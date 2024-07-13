<div class="space-y-3">
    @foreach ($todos as $todo)
        <livewire:components.todos.item :$todo :key="$todo->id" />
    @endforeach
</div>
