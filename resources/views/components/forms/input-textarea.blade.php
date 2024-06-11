@props(['label', 'name'])

@php
    $defaults = [
        'label'=>$label,
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full h-full',
        'value' => old($name)
    ];

@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}/>
</x-forms.field>

