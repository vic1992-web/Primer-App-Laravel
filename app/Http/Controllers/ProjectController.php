<?php

use App\Http\Controllers\ProjectController;
namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use  App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

    return view('projects.index', [
        'projects' => Project::latest()->paginate(2)
    ]);
    }
public function show(Project  $project){

    return view('projects.show',[
        'project' => $project

    ]);    
}

public function create(){
    return view('projects.create', [

        'project' =>new Project
    ]);
      
}

public function store(SaveProjectRequest $request){
  
  Project::create($request->validated());

    return  redirect()->route('projects.index')->with('status', 'EL proyecto fue creado con exito');    
}

public function edit(Project  $project)
{
    return view('projects.edit',[
        'project' => $project

    ]);   
}

public function update(Project  $project, SaveProjectRequest $request)
{   

    $project->update($request->validated());
    
    return  redirect()->route('projects.show',  $project)->with('status', 'EL proyecto fue actualizado con exito'); 

}

public function destroy(Project  $project)
{
    $project->delete();

    return  redirect()->route('projects.index')->with('status', 'EL proyecto fue eliminado con exito'); 

}
  
}
