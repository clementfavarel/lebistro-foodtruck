<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-0 bg-slate-50">
        <h1 class="text-4xl font-bold pb-2">{{ __('Menü') }}</h1>

        <p class="pb-6">
            {{ __('Unsere Speisekarte besteht aus leckeren Produkten, die ausschließlich aus erstklassigen Zutaten zubereitet werden.') }}
        </p>

        <div class="flex flex-col gap-4 justify-center items-center lg:flex-row">
            <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg sm:flex-1">
                <img src="/img/burgers/burning-man.jpg" alt="Burning Man burger" class="rounded-md">
                <h2 class="text-xl font-semibold mt-2">{{ __('Burgers') }}</h2>
                <p>
                    {{ __('Entdecken Sie unsere luxuriösen Burger, die mit hochwertigen Zutaten und Liebe zubereitet werden. Ein echtes kulinarisches Erlebnis.') }}
                </p>
                <x-primary-link :href="route('menu.burgers')"
                    class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2 mx-auto">
                    {{ __('Mehr sehen') }}
                </x-primary-link>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg sm:flex-1">
                <img src="/img/snacks/fries.jpg" alt="French fries" class="rounded-md" loading="lazy">
                <h2 class="text-xl font-semibold mt-2">{{ __('Snacks') }}</h2>
                <p>
                    {{ __('Entdecken Sie unsere köstlichen Snacks, ideal, wenn Sie nicht hungrig genug sind, um unsere Burger zu probieren. (Sie sollten sie trotzdem ausprobieren)') }}
                </p>
                <x-primary-link :href="route('menu.snacks')"
                    class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2 mx-auto">
                    {{ __('Mehr sehen') }}
                </x-primary-link>
            </div>

            <div class="flex flex-col gap-2 p-4 bg-white shadow-sm rounded-lg sm:flex-1">
                <img src="/img/drinks/coca-cola.jpg" alt="Coca Cola can" class="rounded-md" loading="lazy">
                <h2 class="text-xl font-semibold mt-2">{{ __('Drinks') }}</h2>
                <p>
                    {{ __('Entdecken Sie unsere frischen und leckeren Getränke, perfekt als Begleitung zu Ihren Burgern oder gegen die Hitze.') }}
                </p>
                <x-primary-link :href="route('menu.drinks')"
                    class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2 mx-auto">
                    {{ __('Mehr sehen') }}
                </x-primary-link>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
