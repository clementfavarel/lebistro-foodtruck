<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold pb-6">{{ __('Burger details') }}</h1>
        <div class="flex flex-col lg:flex-row lg:items-start lg:space-x-8">
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                <img src="{{ $burger->img_src }}" alt="{{ $burger->img_alt }}"
                    class="w-full aspect-video rounded-lg object-cover shadow-md" loading="lazy">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="bg-white shadow-sm rounded-lg p-6">
                    <div class="flex items-start justify-between mb-4">
                        <h2 class="text-2xl font-semibold">{{ __($burger->name) }}</h2>
                        <x-primary-link class="text-lg font-bold">
                            {{ __($burger->price) }}€
                        </x-primary-link>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Description :</h3>
                            <p class="text-gray-700">{{ $burger->description }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Ingredients :</h3>
                            <p class="text-gray-700">{{ $burger->ingredients }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Allergens :</h3>
                            <p class="text-gray-700">{{ $burger->allergens }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>