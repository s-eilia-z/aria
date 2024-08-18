<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        user()->create([
            'name' => 'سید ایلیا زراره',
            'phone' => '09228053127',
            'gender' => 'male',
            'password' => Hash::make(123456),
            'is_active' => true,
            'is_admin' => true,
        ]);
    }
}
