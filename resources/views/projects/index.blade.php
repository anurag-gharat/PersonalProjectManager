@extends('/layout')
@section('content')

<div class="container p-4 bg-light shadow-lg pl-5 h-75">
    <div class="title-display">
    <h1 class="title">Active Projects:</h1>
    </div>
    <div class="row list-holder pt-3">
        <div class="col-md-6 pl-5">
            <ol class="projects-list">
            @foreach($projects as $project)
            <h3>
            <li class="projects-list-item">
            <a href="/projects/{{$project->id}}" class="color">{{$project->name}}</a>
            </li>
            </h3>
            @endforeach
            </ol>
        </div>
        <div class="col-md-6">
            <div class="display bg-dark w-100 h-100">

            </div>

        </div>
        
    </div>

</div>    
@endsection
