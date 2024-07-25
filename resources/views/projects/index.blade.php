@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3 mb-3">Progetti</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Crea Nuovo Progetto</a>
        @if ($projects->isEmpty())
            <p>Nessun progetto disponibile.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipologia</th>
                        <th>Azione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->type ? $project->type->name : 'N/A' }}</td>
                            <td>
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">Visualizza</a>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
