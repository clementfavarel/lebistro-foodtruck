<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold pb-6">{{ __('Burgers') }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($burgers as $burger)
                <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg">
                    <img src="{{ $burger->img_src }}" alt="{{ $burger->img_alt }}"
                        class="w-full aspect-video rounded-md object-cover" loading="lazy">
                    <h2 class="text-xl font-semibold mt-2">{{ __($burger->name) }}</h2>
                    <p class="flex-grow">
                        {{ __(Str::words($burger->description, 15)) }}
                    </p>
                    <x-primary-link :href="route('menu.burgers.show', $burger)" class="self-end sm:mx-auto mt-2 sm:mt-4">
                        {{ __('Erfahren Sie mehr') }}
                    </x-primary-link>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
