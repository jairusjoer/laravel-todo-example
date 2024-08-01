<?php
use App\Models\Todo;
use Livewire\Features\SupportAttributes\AttributeCollection;

use function Livewire\Volt\{state, mount};

state(['variant', 'class']);

mount(function () {
    $icon = file_get_contents(resource_path("icons/{$this->variant}.svg"));

    $icon = str_replace('<svg ', '<svg class="'.$this->class.'"', $icon);

    $this->variant = $icon;
});
?>

{!! $variant !!}
