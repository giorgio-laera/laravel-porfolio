<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects= Project::with('technologies')->get();
        // dd($project);
        return response()->json([
            'succes'=> true,
            'data'=> $projects
        ]);
    }
    
    public function show(Project $project){
 $project->load('technologies','type')->get();
        //   dd($project);
        return response()->json([
            'succes'=> true,
            'data'=> $project
             ]);
        }
}
