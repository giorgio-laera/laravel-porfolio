<?php

namespace App\Http\Controllers\admin ;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        
        $types=Type::all();
                // take the technologies of project 
        $technologies=Technology::all();
        return view('projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data=$request->all();
        //   dd($data);
        $newProject= new Project();
        $newProject->name = $data['name'];
        $newProject->client=$data['client'];
        $newProject->type_id =$data['type_id'];
        $newProject->start_date=$data['start_date'];
        $newProject->end_date=$data['end_date'];
        $newProject->description=$data['description'];

        $newProject->save();

        //after save the project
        $newProject->technologies()->attach($data['technologies']);
        
        return redirect()->route('project.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // $project=Project::where('id', $id)->first();
        
        // dd($project->technologies);
        return view('projects.show',  compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // dd($project);
        // take the types of project
        $types=Type::all();
        $technologies=Technology::all();

        return view('projects.edit',compact('project','types','technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data=$request->all();
        // dd( $project->type['name']);
        $project->name = $data['name'];
        $project->client=$data['client'];
        if($data['type_id']!= $project->type['name'])  $project->type_id =$data['type_id'];
        // $project->type_id =$data['type_id'];
        $project->start_date=$data['start_date'];
        $project->end_date=$data['end_date'];
        $project->description=$data['description'];

        $project->technologies()->sync($data['technologies']);

        $project->update();

       

        return redirect()->route('project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
      //  dd($project);
       $project->delete();
        return redirect()->route('project.index');
    }
}
