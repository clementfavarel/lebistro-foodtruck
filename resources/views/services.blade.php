<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-[40vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="/img/catering.jpg" alt="Le Bistro Foodtruck Services"
                class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative h-full flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-center mb-6">Our Services</h1>
            <p class="text-xl md:text-2xl text-center mb-8 max-w-2xl">Make your event unforgettable with our premium
                services</p>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Catering Service -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/caterer.jpg" alt="Catering Service" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Catering Service</h2>
                    <p class="text-gray-600 mb-6">
                        From private parties to corporate events, our catering service brings the beloved taste of Le
                        Bistro to your location. We offer:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Customizable menu options</li>
                        <li>Professional service staff</li>
                        <li>Complete setup and cleanup</li>
                        <li>Flexible serving styles</li>
                    </ul>
                </div>
            </div>

            <!-- DJ and Music Equipment -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/dj.jpg" alt="DJ and Music Equipment" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">DJ & Music Equipment</h2>
                    <p class="text-gray-600 mb-6">
                        Set the perfect atmosphere for your event with our professional DJ services and top-tier sound
                        equipment:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Professional DJ services</li>
                        <li>High-quality sound systems</li>
                        <li>Lighting equipment</li>
                        <li>Customizable playlist options</li>
                    </ul>
                </div>
            </div>

            <!-- Photobooth -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/photobooth.jpg" alt="Photobooth Service" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Photobooth</h2>
                    <p class="text-gray-600 mb-6">
                        Capture memorable moments with our modern photobooth service:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>High-quality instant prints</li>
                        <li>Digital copies provided</li>
                        <li>Fun props and backgrounds</li>
                        <li>Professional attendant</li>
                    </ul>
                </div>
            </div>

            <!-- Foodtruck Rental -->
            <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
                <img src="/img/foodtruck-rental.jpg" alt="Foodtruck Rental" class="w-full h-64 object-cover">
                <div class="p-8">
                    <h2 class="text-2xl font-bold mb-4">Foodtruck Rental</h2>
                    <p class="text-gray-600 mb-6">
                        For professionals only, we offer flexible foodtruck rental options:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Full-service rental with experienced cook</li>
                        <li>Truck-only rental for professional operators</li>
                        <li>Fully equipped kitchen</li>
                        <li>Flexible rental periods</li>
                    </ul>
                    <p class="text-sm text-gray-500 dark:text-gray-400 italic">
                        *Available for professional customers only. Proper documentation required.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact CTA Section -->
        <div class="mt-12 bg-orange-500 rounded-xl shadow-lg p-8 text-white">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-4">Ready to Make Your Event Special?</h2>
                <p class="mb-6 max-w-2xl mx-auto">Contact us to discuss your event needs and get a customized quote. Our
                    team is ready to help create an unforgettable experience for you and your guests.</p>
                <x-primary-link :href="route('service.contact')"
                        class="bg-white hover:bg-slate-50 !text-orange-400 transition-colors inline-block">
                        {{ __('Ask for a service') }}
                    </x-primary-link>
            </div>
        </div>
    </div>
</x-app-layout>
