@extends('layout')
@section('content')
<h1 class="title">{{$project->name}}</h1>
<div class="content">
    {{$project->description}}
</div>
<div class="content">
<a href="/projects/{{$project->id}}/edit">Edit</a>
</div>
@if($project->tasks->count())

    <div class="field">
      
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
<form class="box" method="POST" action="/projects/{{$project->id}}/tasks">
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
            <button type="submit" class="button is-link">Add a Task</button>
        </div>
    </div>
</div>
</form>
    
@endsection