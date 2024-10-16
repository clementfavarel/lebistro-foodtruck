<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Drink;
use App\Models\Snack;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Basic stats
        $stats = [
            'total_users' => User::count(),
            'new_users_today' => User::whereDate('created_at', today())->count(),

            // Orders stats (if applicable)
            // 'total_orders' => Order::count(),
            // 'orders_today' => Order::whereDate('created_at', today())->count(),
            // 'total_revenue' => Order::sum('total_amount'),

            // Products stats (if applicable)
            'total_products' => Burger::count() + Snack::count() + Drink::count(),
            // 'low_stock_products' => Product::where('stock', '<=', 10)->count(),

            // System stats
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
        ];

        // Get users registration over time (last 7 days)
        $userStats = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->get();

        return view('dashboard', compact('stats', 'userStats'));
    }
}
