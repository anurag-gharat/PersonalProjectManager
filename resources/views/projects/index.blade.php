@extends('/layout')
@section('content')
<div class="field">
        <h1 class="title">Projects</h1>
</div>
<div class="field">
        <ol>
        @foreach($projects as $project)
        <h3>
        <li>
            <a href="/projects/{{$project->id}}">{{$project->name}}</a>
        </li>
        </h3>
        @endforeach
    </ol>
</div>    
@endsection
