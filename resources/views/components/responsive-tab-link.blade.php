@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex flex-col items-center gap-1 text-orange-500'
            : 'flex flex-col items-center gap-1 text-black/80 dark:text-white/80 hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>