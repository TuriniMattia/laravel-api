<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['css', 'vue', 'js', 'php',  'html', 'vite', 'sql', 'laravel',];
        foreach ($technologies as $technology_name) {
            $new_tech = new Technology();
            $new_tech->name = $technology_name;
            $new_tech->slug = Str::slug($technology_name);

            $new_tech->save();
        }
    }
}
