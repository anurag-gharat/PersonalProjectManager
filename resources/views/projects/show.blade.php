@extends('layout')
@section('content')

<div class="container shadow single-project h-75">
    <div class="row">
        <div class="col-md-6">
                <h4 class="s-color">Title:</h4>
                <h1 class="title color">{{$project->name}}</h1>
        <div class="container">
            <h4 class="s-color">Description:</h4>
            <p>{{$project->description}}</p>
        </div>
        <div class="container">
            <a href="/projects/{{$project->id}}/edit" class="single-page-link btn rounded-lg">Edit</a>
        
        
        @if($project->tasks->count())

            <div class="field container pt-4">
                <h4 class="s-color">Tasks:</h4>
                @foreach ($project->tasks as $task)
                    
                    <div class="field">
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <input type="checkbox" class="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                        <label>{{$task->details}}</label> 
                    </form>
                    </div>  
                @endforeach
                
            </div>
        @endif
    </div>
</div>
<div class="col-md-6">
    <form method="POST" action="/projects/{{$project->id}}/tasks">
        @csrf
    <div class="box">
        <label for="description" class="label">Name of Task</label>
        <div class="control">
            <div class="field">
            <input type="text" class="input" name="details" placeholder="Details of task"> 
            </div>
        </div>
        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link single-page-link">Add a Task</button>
            </div>
        </div>
    </div>
    </form>
    @endsection
</div>
</div>
</div>
