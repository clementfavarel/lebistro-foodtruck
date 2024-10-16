<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Seeder;

class SnacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Snack::create([
            'img_src' => '/img/snacks/fries.jpg',
            'img_alt' => 'French fries',
            'name' => 'French fries',
            'price' => 4.00,
        ]);

        Snack::create([
            'img_src' => '/img/snacks/truffle-fries.jpg',
            'img_alt' => 'Truffle fries',
            'name' => 'Truffle fries',
            'price' => 5.00,
        ]);

        Snack::create([
            'img_src' => '/img/snacks/potatoes.jpg',
            'img_alt' => 'Potatoes',
            'name' => 'Potatoes',
            'price' => 4.00,
        ]);

        Snack::create([
            'img_src' => '/img/snacks/mozzarella-sticks.jpg',
            'img_alt' => 'Mozzarella sticks',
            'name' => 'Mozzarella sticks',
            'price' => 4.00,
        ]);
    }
}
