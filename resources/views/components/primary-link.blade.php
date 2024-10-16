@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-block bg-orange-500 hover:bg-orange-400 px-3 py-2 rounded-lg text-white font-bold w-fit'
            : 'inline-block bg-orange-500 hover:bg-orange-400 px-3 py-2 rounded-lg text-white font-bold w-fit';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
