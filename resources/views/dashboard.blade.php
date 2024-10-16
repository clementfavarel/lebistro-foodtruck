<!-- resources/views/admin/dashboard.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                <!-- Users Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-500">
                                <svg class="h-6 w-6 text-blue-600 dark:text-blue-100" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total Users</p>
                                <p class="text-2xl font-semibold text-gray-700">{{ $stats['total_users'] }}</p>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $stats['new_users_today'] }} new today
                        </p>
                    </div>
                </div>
                <!-- Products Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 dark:bg-red-500">
                                <svg class="h-6 w-6 text-red-600 dark:text-red-100" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Products</p>
                                <p class="text-2xl font-semibold text-gray-700">{{ $stats['total_products'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- System Information -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4">System Information</h2>
                        <div class="grid grid-cols-1 gap-2">
                            <div>
                                <p class="text-sm text-gray-600">PHP Version</p>
                                <p class="font-medium">{{ $stats['php_version'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Laravel Version</p>
                                <p class="font-medium">{{ $stats['laravel_version'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4">User Registration Timeline</h2>
                        <canvas id="userGrowthChart" data-labels="{{ json_encode($stats['user_growth']['dates']) }}" data-counts="{{ json_encode($stats['user_growth']['counts']) }}"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>