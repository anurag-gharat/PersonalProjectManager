<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project){
        $attributes= request()->validate(['details'=>'required']);
        $project->addTask($attributes);
        
        // Tasks::create([
        //     'project_id'=>$project->id,
        //     'details'=>request('details')
        // ]);
        return back();

    }
    
    public function update(Tasks $task){
     $task->update([
         'completed' => request()->has('completed')
     ]);
     return back();
    }
}
