<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Console\Seeders\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = Type::all();

        $type_ids = $types->pluck('id')->all();

        $technologies_ids = Technology::all()->pluck('id')->all();



        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project_name = $faker->sentence(8);
            $project->project_name = $project_name;
            $project->slug = Str::slug($project_name);
            $project->project_description = $faker->text(300);
            $project->github_link = $faker->url();
            $project->type_id = $faker->optional()->randomElement($type_ids);
            $project->save();
            $random_technologies_ids = $faker->randomElements($technologies_ids, 2);
            $project->technologies()->attach($random_technologies_ids);
        }
    }
}
