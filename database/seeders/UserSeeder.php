<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alex',
            'last_name' => 'Rezende',
            'email' => 'arrezende@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);
    }
}
