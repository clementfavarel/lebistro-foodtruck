<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionsSeeder::class,
            UsersSeeder::class,
            RewardsSeeder::class,
            FidelityTransactionsSeeder::class,
            PostsSeeder::class,
            PostCategoriesSeeder::class,
            BurgersSeeder::class,
            SnacksSeeder::class,
            DrinksSeeder::class,
        ]);
    }
}
