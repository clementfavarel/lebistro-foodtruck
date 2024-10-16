<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Drink;
use App\Models\Snack;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $userGrowth = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->limit(7)
            ->get();

        $stats = [
            'total_users' => User::count(),
            'new_users_today' => User::whereDate('created_at', today())->count(),
            'user_growth' => [
                'dates' => $userGrowth->pluck('date')->toArray(),
                'counts' => $userGrowth->pluck('count')->toArray(),
            ],
            'total_products' => Burger::count() + Snack::count() + Drink::count(),
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
        ];

        return view('dashboard', compact('stats'));
    }
}