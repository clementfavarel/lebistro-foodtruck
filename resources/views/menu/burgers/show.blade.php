<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold pb-6">{{ __('Burger details') }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg">
                <img src="{{ $burger->img_src }}" alt="{{ $burger->img_alt }}"
                    class="w-full aspect-video rounded-md object-cover" loading="lazy">
                <div class="flex items-start justify-between mt-2">
                    <h2 class="mt-2">{{ __($burger->name) }}</h2>
                    <x-primary-link>
                        {{ __($burger->price) }}€
                    </x-primary-link>
                </div>
                <h3 class="mt-4">Description :</h3>
                <p>{{ $burger->description }}</p>

                <h3 class="mt-4">Ingredients :</h3>
                <p>{{ $burger->ingredients }}</p>

                <h3 class="mt-4">Allergens :</h3>
                <p>{{ $burger->allergens }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
