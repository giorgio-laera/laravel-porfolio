<?php
namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TechnologyTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            "JavaScript",
            "Python",
            "HTML/CSS",
            "SQL",
            "TypeScript",
            "Java",
            "C#",
            "C++",
            "PHP",
            "Go",
        ];
        foreach($technologies as $technology){
            $newTecnology = new Technology();

            $newTecnology->name=$technology;
            $newTecnology->color=$faker->hexColor();

            $newTecnology->save();
        }
    }
}
