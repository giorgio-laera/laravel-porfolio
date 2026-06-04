<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Project_Technology;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Project_Technology_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project=count(Project::all());
        $tecnology=count(Technology::all());

        for ($i=0; $i < 20 ; $i++) { 
             $newProjectTecnology= new Project_Technology();

             $newProjectTecnology->project_id=rand(1,  $project );
             $newProjectTecnology->technology_id=rand(1,  $tecnology );

             $newProjectTecnology->save();
        }
       
    }
}
