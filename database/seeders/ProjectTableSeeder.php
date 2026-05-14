<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){

            $newProject = new Project();

            $start_date=$faker->dateTimeThisDecade();
            $end_date=$faker->dateTimeBetween($start_date ,'');

             $newProject ->name=$faker->sentence();
             $newProject ->client=$faker->company();
             $newProject ->start_date=$start_date;
             $newProject ->end_date=$end_date;
             $newProject ->description=$faker->paragraph();

             $newProject->save();
        }

        
    }
}