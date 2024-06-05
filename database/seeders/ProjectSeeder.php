<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $post = new Project();

            $title = $faker->sentence(6);

            $post->title = $title;
            $post->description = $faker->optional()->text(500);
            $post->link = $faker->url();

            $post->save();
        }
    }
}
