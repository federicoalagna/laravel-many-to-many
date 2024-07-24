@extends('layouts.backoffice')

@section('content')
    <h1>Modifica Progetto</h1>
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea id="description" name="description" class="form-control" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
