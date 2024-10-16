<?php

namespace Database\Seeders;

use App\Models\FidelityTransaction;
use Illuminate\Database\Seeder;

class FidelityTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FidelityTransaction::create([
            'description' => 'Initial seed points',
            'user_id' => 1,
        ]);
    }
}
