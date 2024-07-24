@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        @if ($project->type)
            <p>Tipo: {{ $project->type->name }}</p>
        @endif
    </div>
@endsection
