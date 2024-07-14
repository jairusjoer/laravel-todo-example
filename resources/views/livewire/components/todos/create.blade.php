<form class="grow flex items-start gap-1 p-2 bg-brand-subtle rounded-xl" wire:submit="create" x-on:submit="setTimeout(() => $el.reset(), 75)">
    @csrf
    <div class="grow">
        <input wire:model.blur="text" class="w-full h-8 p-2 rounded outline-brand bg-background border" type="text"
            placeholder="Create a new Todo..." required>
        @error('text')
            <div class="mt-2 flex gap-1 leading-4 text-small text-destructive"><x-icon variant="circle-x" />
                {{ $message }}</div>
        @enderror
    </div>
    <button class="button-brand-solid" title="Create"><x-icon variant="plus" /></button>
</form>
