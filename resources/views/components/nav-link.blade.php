@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center font-medium leading-5 text-orange-500 focus:outline-none focus:border-orange-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
