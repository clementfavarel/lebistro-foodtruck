<?php

namespace Database\Seeders;

use App\Models\Reward;
use Illuminate\Database\Seeder;

class RewardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reward::create(['name' => 'Snack offert', 'points_required' => 50, 'description' => 'Un snack gratuit d\'une valeur de 4 à 5€']);
        Reward::create(['name' => 'Burger classique offert', 'points_required' => 100, 'description' => 'Un burger classique gratuit d\'une valeur de 8.90 à 11.90€']);
        Reward::create(['name' => 'Burger premium offert', 'points_required' => 140, 'description' => 'Un burger premium gratuit d\'une valeur de 12.90 à 13.90€']);
        Reward::create(['name' => 'Menu classique offert', 'points_required' => 150, 'description' => 'Un menu classique offert incluant un snack et un burger classique']);
        Reward::create(['name' => 'Menu premium offert', 'points_required' => 180, 'description' => 'Un menu premium offert incluant un snack et un burger premium']);
    }
}
