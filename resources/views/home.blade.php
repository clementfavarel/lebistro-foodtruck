<x-app-layout>
    <!-- Hero Section -->
    @guest
        <div class="relative h-[70vh] overflow-hidden">
            <div class="absolute inset-0">
                <img src="img/header.jpg" alt="Miko Dani burger foodtruck" class="w-full h-full object-cover brightness-50">
            </div>
            <div class="relative h-full flex flex-col justify-center items-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold text-center mb-6">Le Bistro Foodtruck</h1>
                <p class="text-xl md:text-2xl text-center mb-8 max-w-2xl">Discover Linz's finest premium burgers, served
                    fresh from our food truck</p>
                <x-primary-link :href="route('menu.index')"
                    class="text-lg px-8 py-3 bg-orange-500 hover:bg-orange-600 transition-colors">
                    {{ __('Explore Our Menu') }}
                </x-primary-link>
            </div>
        </div>
    @endguest

    <!-- Auth Welcome Cards -->
    @auth
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 relative z-10">
            @if (Auth::user()->can('administer'))
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
                    <div class="flex flex-col items-center text-center">
                        <h1 class="text-3xl font-bold mb-6">{{ __('Welcome back, ') }} {{ Auth::user()->name }}</h1>
                        <x-primary-link :href="route('dashboard')" class="bg-orange-500 hover:bg-orange-600 transition-colors">
                            {{ __('Access Dashboard') }}
                        </x-primary-link>
                    </div>
                </div>
            @else
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
                    <div class="flex flex-col items-center text-center">
                        <h1 class="text-3xl font-bold mb-4">{{ __('Welcome back, ') }} {{ Auth::user()->name }}</h1>
                        <p class="text-xl mb-6">You have <span class="text-orange-500 font-bold">{{ $points }}
                                points</span></p>
                        <x-primary-link :href="route('fidelity')" class="bg-orange-500 hover:bg-orange-600 transition-colors">
                            {{ __('View My QR Code') }}
                        </x-primary-link>
                    </div>
                </div>
            @endif
        </div>
    @endauth

    <!-- Main Content Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Menu Section -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/menu-burger-and-fries-compilation.jpg" alt="Menu burgers and fries compilation"
                    class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Our Menu</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        {{ __('Discover our delicious and premium-ingredients based products !') }}
                    </p>
                    <x-primary-link :href="route('menu.index')"
                        class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block">
                        {{ __('View Full Menu') }}
                    </x-primary-link>
                </div>
            </div>

            <!-- Location Section -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="h-64">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.516251688664!2d14.296495976868432!3d48.312154538990576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47739751fd4dd095%3A0xc8dc0daf738fa9f6!2sLe%20Bistro%20Foodtruck!5e0!3m2!1sfr!2sfr!4v1725951577122!5m2!1sfr!2sfr"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Find Us</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">Visit us at our regular spot in Linz</p>
                    <x-primary-link href="https://maps.app.goo.gl/UfryD4f8xxZTYbKt9" target="_blank"
                        class="bg-orange-500 hover:bg-orange-600 transition-colors inline-block">
                        {{ __('View on Google Maps') }}
                    </x-primary-link>
                </div>
            </div>
        </div>

        <!-- News Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold mb-8">Latest News</h2>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="/img/anita-guest.png" alt="Anita guest at Le Bistro Foodtruck"
                            class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-8 md:w-1/2">
                        <h3 class="text-2xl font-bold mb-4">
                            {{ __('Le Bistro Foodtruck: Ein Besuch von Private Taste by Anita') }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            {{ __("Im Februar besuchte uns die Food-Bloggerin 'Private Taste by Anita' am Le Bistro Foodtruck. Ihre Worte über unsere frischen, handgemachten Burger und die familiäre Atmosphäre haben uns zutiefst berührt. Lesen Sie ihren Bericht und erfahren Sie mehr über ihre Erfahrungen bei uns!") }}
                        </p>
                        <x-primary-link :href="route('posts.show', 1)" class="bg-orange-500 hover:bg-orange-600 transition-colors">
                            {{ __('Read More') }}
                        </x-primary-link>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-12 bg-white rounded-xl shadow-lg p-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-4">{{ __('Need help? Contact us!') }}</h2>
                <p class="mb-6">{{ __('Stellen Sie Ihre Frage und wir werden Ihnen per E-Mail antworten.') }}</p>
                <x-primary-link :href="route('contact')"
                    class="text-lg px-8 py-3 bg-orange-500 text-black hover:bg-orange-600 transition-colors">
                    {{ __('Contact Us') }}
                </x-primary-link>
            </div>
        </div>
    </div>
</x-app-layout>
