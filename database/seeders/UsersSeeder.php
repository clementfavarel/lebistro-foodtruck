<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User Name',
            'email' => 'user@example.com',
        ]);

        $admin_user = User::factory()->create([
            'name' => 'Admin Name',
            'email' => 'admin@example.com',
        ]);
        $admin_user->assignRole('admin');
    }
}
