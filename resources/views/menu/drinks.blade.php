<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold pb-6">{{ __('Drinks') }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($drinks as $drink)
                <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg">
                    <img src="{{ $drink->img_src }}" alt="{{ $drink->img_alt }}"
                        class="w-full aspect-video rounded-md object-cover" loading="lazy">
                    <div class="flex items-start justify-between mt-2">
                        <h2 class="text-xl font-semibold mt-2">{{ __($drink->name) }}</h2>
                        <x-primary-link>
                            {{ __($drink->price) }}€
                        </x-primary-link>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
