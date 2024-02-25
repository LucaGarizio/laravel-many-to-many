<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
            -> count(10)
            -> create()
            -> each(function($technology) {
            // Seleziona 4 progetti random
            $projects = Project :: inRandomOrder() -> limit(4) -> get();
            // collega i progetti alla tecnologia
            $technology -> projects() -> attach($projects);
            $technology -> save();
     });
    }
}
