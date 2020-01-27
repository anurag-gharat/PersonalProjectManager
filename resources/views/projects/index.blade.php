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
            <a href="/projects/{{$project->id}}" class="color" onmouseover="reveal({{$project->id}})">{{$project->name}}</a>
            <p class="hidden" id="{{$project->id}}">{{$project->description}}</p>
            </li>
            </h3>
            @endforeach
            </ol>
        </div>
        <div class="col-md-6">
            <div class="display border w-100 h-100">
                <p id="show" class="text-show"></p>

            </div>

        </div>
        
    </div>

</div>    
@endsection
<script>
    function reveal(id){
        var text=document.getElementById(id).innerHTML;
        document.getElementById("show").innerHTML=text;
        // alert("hii");
    }
</script>