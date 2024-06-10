@extends('layouts.app')

@section('content')

<section>
    @foreach($projects as $project)
        <div>
            {{$project->nome}}         
        </div>
    @endforeach
</section>

@endsection