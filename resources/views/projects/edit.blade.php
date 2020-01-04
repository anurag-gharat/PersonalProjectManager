@extends('\layout')
@section('content')
<h1 class="title">Edit Your Project</h1>

<form method="POST" action="/projects/{{ $project->id}}">
    {{ method_field('PATCH')}}
    {{ csrf_field()}}
<div class="field">
        <label for="title" class="label"></label>
    
    <div class="control">
    <input type="text" class="input" name="name" placeholder="title" value="{{ $project->name}}">
    </div>
</div>
<div class="field">
    <label for="description" class="label">Description</label>
    <div class="control">
    <textarea name="description" cols="30" rows="10" class="textarea">
        {{ $project->description }}</textarea>
    </div>
</div>
<div class="field">
    <div class="control">
    <button type="submit" class="button is-link">Update Project</button>  
    </div>    

</div> 
</form>
<form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf
    <div class="field">
            <div class="control">
            <button type="submit" class="button is-link">Delete Project</button>  
            </div>    
        
        </div> 
</form>



@endsection