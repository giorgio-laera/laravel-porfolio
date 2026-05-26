<?php
namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        $languages = [
            "JavaScript",
            "Python",
            "Java",
            "C",
            "C++",
            "C#",
            "PHP",
            "Ruby",
            "Swift",
            "Kotlin",
            "Go",
            "Rust",
            "TypeScript",
            "Scala",
            "Perl",
            "R",
            "Dart",
            "Lua",
            "Haskell",
            "MATLAB",
            "Objective-C",
            "Visual Basic",
            "Assembly",
            "SQL",
            "Fortran",
            "COBOL",
            "Julia",
            "Groovy",
            "Elixir",
            "F#",
        ];
        $countLanguages = count($languages);
        for ($i = 0; $i < 10; $i++) {


            $newProject = new Project();

            $start_date = $faker->dateTimeThisDecade();
            $end_date   = $faker->dateTimeBetween($start_date, '');

            $newProject->name              = $faker->sentence();
            $newProject->client            = $faker->company();
            $newProject->start_date        = $start_date;
            $newProject->end_date          = $end_date;
            $newProject->description       = $faker->sentence();
            $newProject->type_id          = rand(1, $countLanguages);

            $newProject->save();
           
        }

    }
}
