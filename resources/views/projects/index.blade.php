@extends('layouts.backoffice')

@section('content')
    <h1 class="m-4">Progetti</h1>
    <a class="btn btn-primary m-4" href="{{ route('projects.create') }}">Crea nuovo progetto</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                <a href="{{ route('projects.edit', $project) }}">Modifica</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
