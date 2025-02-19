<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mattia',
            'email' => 'turinimattia96@gmail.com',
        ]);

        $this->call([
            TypeSeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class,



        ]);
    }
}
