<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Tunzaa',
            'email' => 'admin@tunzaa.com',
            'phone' => '0692041830',
            'userRole' => 'bussiness',
            'is_active' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
