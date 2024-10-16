<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-[30vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="/img/catering.jpg" alt="Contact Us for Services"
                class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative h-full flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-4">Request Our Services</h1>
            <p class="text-xl md:text-2xl text-center max-w-2xl">Let us make your event unforgettable</p>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <form action="{{ route('service.contact.submit') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First and Last Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Full Address</label>
                            <input type="text" name="address" id="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="city" id="city" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- State -->
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                            <input type="text" name="state" id="state" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>

                        <!-- Zip Code -->
                        <div>
                            <label for="zip" class="block text-sm font-medium text-gray-700">Zip Code</label>
                            <input type="text" name="zip" id="zip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Type of Event -->
                        <div>
                            <label for="event_type" class="block text-sm font-medium text-gray-700">Type of Event</label>
                            <input type="text" name="event_type" id="event_type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Event Start Date -->
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Event Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Event End Date -->
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700">Event End Date</label>
                            <input type="date" name="end_date" id="end_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Approximate Duration -->
                        <div>
                            <label for="duration" class="block text-sm font-medium text-gray-700">Approximate Duration (hours)</label>
                            <input type="number" name="duration" id="duration" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>

                        <!-- Number of People -->
                        <div>
                            <label for="people_count" class="block text-sm font-medium text-gray-700">Number of People</label>
                            <input type="number" name="people_count" id="people_count" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block text-sm font-medium text-gray-700 mb-2">Additional Services</span>
                        <div class="space-y-4">
                            <div>
                                <label for="drinks" class="block text-sm font-medium text-gray-700">Drinks</label>
                                <input type="text" name="services[drinks]" id="drinks" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="e.g., Open bar, Wine selection, Cocktails">
                            </div>
                            <div>
                                <label for="food" class="block text-sm font-medium text-gray-700">Food</label>
                                <input type="text" name="services[food]" id="food" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="e.g., Buffet, Plated dinner, Hors d'oeuvres">
                            </div>
                            <div>
                                <label for="catering_infrastructure" class="block text-sm font-medium text-gray-700">Catering Infrastructure</label>
                                <input type="text" name="services[catering_infrastructure]" id="catering_infrastructure" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="e.g., Tables, Chairs, Tents, Linens">
                            </div>
                        </div>
                    </div>

                    <!-- Budget -->
                    <div class="mt-6">
                        <label for="budget" class="block text-sm font-medium text-gray-700">Budget (in €)</label>
                        <input type="number" name="budget" id="budget" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                    </div>

                    <!-- Message -->
                    <div class="mt-6">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message (optional)</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-8">
                        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>