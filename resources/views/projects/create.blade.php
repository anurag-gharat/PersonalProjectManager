@extends('layout')
@section('content')
        <h1 class="title">Create a New Project</h1>
        @foreach ($errors as $error)
            
        @endforeach
        
        <form method="POST" action="/projects">
            {{ csrf_field() }}
            <div class="field">
            <input type="text" name="name" placeholder="projectname" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{old('title')}}">
            </div>
            <div class="field">
            <textarea name="description" placeholder="description of project" class="textarea {{ $errors->has('description') ? 'is-danger':''}}">{{old('description')}}</textarea>
            </div>
            <div class="field">
            <button type="submit" class="button is-success">Create</button>
            </div>
        </form>
        @if($errors->any())
        <div class="notification is-danger">
        @foreach ($errors->all() as $error)
            <ul>
                <li>
                    {{$error}}
                </li>
            </ul>
            
        @endforeach
        </div>
        @endif

        
        
            {{-- @foreach($projects as $project)
        <li>{{$project->name}}
        <ul>
            <li>{{$project->description}}</li>
        </ul>
        </li>
        @endforeach --}}
    
@endsection