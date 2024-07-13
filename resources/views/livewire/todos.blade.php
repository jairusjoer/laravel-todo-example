<div class="space-y-3">
    @foreach ($todos as $todo)
        <livewire:todo :$todo :key="$todo->id" />
    @endforeach
</div>
