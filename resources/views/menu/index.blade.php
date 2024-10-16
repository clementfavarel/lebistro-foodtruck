<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-[40vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="img/menu-burger-and-fries-compilation.jpg" alt="Le Bistro Menu"
                class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative h-full flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-center mb-6">{{ __('Menü') }}</h1>
            <p class="text-xl md:text-2xl text-center mb-8 max-w-2xl">{{ __('Entdecken Sie unsere köstlichen Spezialitäten') }}</p>
        </div>
    </div>

    <!-- Menu Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <p class="text-xl text-center mb-12 max-w-3xl mx-auto dark:text-white">
            {{ __('Unsere Speisekarte besteht aus leckeren Produkten, die ausschließlich aus erstklassigen Zutaten zubereitet werden.') }}
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Burgers -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/burgers/burning-man.jpg" alt="Burning Man burger" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">{{ __('Burgers') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Entdecken Sie unsere luxuriösen Burger, die mit hochwertigen Zutaten und Liebe zubereitet werden. Ein echtes kulinarisches Erlebnis.') }}
                    </p>
                    <x-primary-link :href="route('menu.burgers')"
                        class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2">
                        {{ __('Mehr sehen') }}
                    </x-primary-link>
                </div>
            </div>

            <!-- Snacks -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/snacks/fries.jpg" alt="French fries" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">{{ __('Snacks') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Entdecken Sie unsere köstlichen Snacks, ideal, wenn Sie nicht hungrig genug sind, um unsere Burger zu probieren. (Sie sollten sie trotzdem ausprobieren)') }}
                    </p>
                    <x-primary-link :href="route('menu.snacks')"
                        class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2">
                        {{ __('Mehr sehen') }}
                    </x-primary-link>
                </div>
            </div>

            <!-- Drinks -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/drinks/coca-cola.jpg" alt="Coca Cola can" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">{{ __('Drinks') }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ __('Entdecken Sie unsere frischen und leckeren Getränke, perfekt als Begleitung zu Ihren Burgern oder gegen die Hitze.') }}
                    </p>
                    <x-primary-link :href="route('menu.drinks')"
                        class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block mt-2">
                        {{ __('Mehr sehen') }}
                    </x-primary-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>