<?php

namespace Database\Seeders;

use App\Models\Technologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $technologies = ['html', 'css', 'js', 'php', 'mysql'];

        foreach ($technologies as $technology) {

            $newTechnology = new Technologies();

            $newTechnology->name = $technology;

            $newTechnology->save();

        }

    }
}
