<?php
namespace Database\Seeders;

use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //  $languages= [
        //     "JavaScript",
        //     "Python",
        //     "Java",
        //     "C",
        //     "C++",
        //     "C#",
        //     "PHP",
        //     "Ruby",
        //     "Swift",
        //     "Kotlin",
        //     "Go",
        //     "Rust",
        //     "TypeScript",
        //     "Scala",
        //     "Perl",
        //     "R",
        //     "Dart",
        //     "Lua",
        //     "Haskell",
        //     "MATLAB",
        //     "Objective-C",
        //     "Visual Basic",
        //     "Assembly",
        //     "SQL",
        //     "Fortran",
        //     "COBOL",
        //     "Julia",
        //     "Groovy",
        //     "Elixir",
        //     "F#",
        // ];
        $types = [
            "Sito Vetrina",
            "E-commerce",
            "Sito Catalogo",
            "Landing Page",
            "Blog / Magazine",
            "Web App",
            "Sito Portfolio",
            "Portale Web",
            "Forum / Community",
            "Sito di Annunci",

        ];
        foreach ($types as $type) {
            $newType = new Type();

            $newType->name        = $type;
            $newType->description = $faker->sentence();

            $newType->save();

        }
    }
}
