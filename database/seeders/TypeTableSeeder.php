<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         $languages= [
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
        foreach ($languages as $language) {
            $newType = new Type();

            $newType->name=$language;
            $newType->description=$faker->sentence();

            $newType->save();

        }
    }
}
