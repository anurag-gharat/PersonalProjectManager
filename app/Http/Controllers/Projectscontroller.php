<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
use \App\User;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
class Projectscontroller extends Controller
{
    public function index(){
        //$projects=\App\Project::all();
        //this is used to access the projects 
        //$projects=Project::where('owner_id',auth()->id())->get();
        //this gives you all projects related to given owner id
        $projects=auth()->user()->projects;
        return view('projects.index',compact('projects'));
    }

    public function create(){
    
        return view('projects.create');
    }

    public function store(){
        
        $attributes = $this->validateProject();
        $attributes['owner_id']=auth()->id();
        $project=Project::create($attributes);

        \Mail::to($project->owner->email)->send(
            new ProjectCreated($project)
        );
        //Project::create(request(['title','description']));
        
        
        // $project=new Project();
        // $project->name=request('title');
        // $project->description=request('description');
        // $project->save();
        return redirect('/projects');

        //return request()->all();
        //return view('projects.index');
    }

    public function edit(Project $project){
    //Project $project- this is route model modeling
        //$project = Project::findorfail($id);

        return view('projects.edit',compact('project'));
    }   
    
    
    //public function show($id)
    public function show(Project $project)
    {
        //$this->authorize('view',$project);
        //return view('projects.show',compact('project'));
        // if(/Gate::denies('view',$project))
        // {
        //     abort(403);
        // }
       
        // //abort_unless($project->owner_id == auth()->id(),403);
        //         //abort_unless(auth()->user()->owns($project),403);
        if($project->owner_id == auth()->id()|| auth()->id()==1 )
        {
            //$project= Project::findorfail(id);
            return view('projects.show',compact('project'));
        }
        else{
            abort(403);
        }
    }
    
    
    public function update(Project $project)
    {
     //dd(request()->all());
    //  $project= Project::findorfail($id);
    //  $project->name=request('title');
    //  $project->description=request('description');
    //  $project->save();

    $project->update($this->validateProject());
    return redirect('/projects');
    }
    
    public function destroy(Project $project)
    {
     //Project::findorfail($id)->delete();
     $project->delete();
     return redirect('/projects');
    }
    protected function validateProject(){
        return request()->validate([
            'name'=>['required','min:5'],'description'=>['required','min:10']]);

    }

}