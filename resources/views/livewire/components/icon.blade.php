<?php
use App\Models\Todo;
use function Livewire\Volt\{state, mount};

state(['variant']);

mount(function () {
    $this->variant = file_get_contents(resource_path("icons/{$this->variant}.svg"));
});
?>


{!! $variant !!}
