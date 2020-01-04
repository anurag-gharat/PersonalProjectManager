@component('mail::message')
Title Of Project: {{$project->name}}

Message
{{$project->description}}

@component('mail::button', ['url' => '/projects/'. $project->id])
View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
