<x-app-layout>
    <!-- Hero Section -->
    <div class="relative h-[30vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="img/fidelity.jpg" alt="Le Bistro Fidelity Program"
                class="w-full h-full object-cover brightness-50">
        </div>
        <div class="relative h-full flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-4">Your Fidelity Account</h1>
            <p class="text-xl md:text-2xl text-center max-w-2xl">Enjoy rewards for your loyalty to Le Bistro</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-slate-50 rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <!-- User Info and QR Code -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                    <div class="text-center md:text-left mb-6 md:mb-0">
                        <h2 class="text-2xl font-bold mb-2">{{ Auth::user()->name }}</h2>
                        <p class="text-orange-400 text-3xl font-semibold">{{ $points }} points</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        @php
                            $data = json_encode([
                                'user_id' => Auth::user()->id,
                                'timestamp' => now()->toDateTimeString(),
                            ]);
                            $encryptedData = Crypt::encrypt($data);
                        @endphp
                        {!! QrCode::size(150)->generate($encryptedData) !!}
                    </div>
                </div>

                <!-- Progress Bar -->
                <div class="mb-8">
                    <div class="relative w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-orange-400 h-4 rounded-full"
                            style="width: {{ max(2, min(100, ($points / 125) * 100)) }}%;">
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">Progress towards next reward tier</p>
                </div>

                <!-- Available Rewards -->
                <h2 class="text-2xl font-bold mb-6">Available Rewards</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($rewards as $reward)
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-xl shadow-md overflow-hidden">
                            <img src="/img/rewards/reward-{{ $reward->id }}.jpg" alt="{{ $reward->name }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">{{ $reward->name }}</h3>
                                <p class="text-gray-600 mb-4">Points required: <span class="text-orange-400 font-semibold">{{ $reward->points_required }}</span></p>
                                @if ($points >= $reward->points_required)
                                    <button class="w-full bg-orange-400 text-white py-2 px-4 rounded-lg hover:bg-orange-500 transition-colors">
                                        Redeem Reward
                                    </button>
                                @else
                                    <button class="w-full bg-gray-300 dark:bg-gray-600 text-gray-500 dark:text-gray-400 py-2 px-4 rounded-lg cursor-not-allowed" disabled>
                                        Not Enough Points
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- How to Earn Points -->
        <div class="mt-12 bg-orange-500 rounded-xl shadow-lg p-8 text-white">
            <h2 class="text-2xl font-bold mb-4 text-center">How to Earn More Points</h2>
            <ul class="list-disc list-inside space-y-2 max-w-2xl mx-auto">
                <li>Make purchases at our food truck or through our catering services</li>
                <li>Refer friends to our loyalty program</li>
                <li>Participate in special promotions and events</li>
                <li>Follow us on social media and engage with our posts</li>
            </ul>
        </div>
    </div>
</x-app-layout>