@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        @if ($project->type)
            <p>Tipologia: {{ $project->type->name }}</p>
        @endif
        @if ($project->technologies->isNotEmpty())
            <p>Tecnologie utilizzate:</p>
            <ul>
                @foreach ($project->technologies as $technology)
                    <li>{{ $technology->name }}</li>
                @endforeach
            </ul>
        @endif
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Torna all'elenco progetti</a>
    </div>
@endsection
