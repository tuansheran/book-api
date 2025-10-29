<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing users before seeding (for dev use only)
        DB::table('users')->truncate();

        // Insert a fresh test user
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user2002'),
        ]);
    }
}



