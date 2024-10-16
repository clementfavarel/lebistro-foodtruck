<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_user = User::factory()->create([
            'name' => 'Admin Name',
            'email' => 'admin@example.com',
            'password' => Hash::make('VidovicGastro.2830!'),
        ]);
        $admin_user->assignRole('admin');
    }
}
