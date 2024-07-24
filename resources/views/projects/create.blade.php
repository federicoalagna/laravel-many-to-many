@extends('layouts.backoffice')

@section('content')

    <body class="bg-light">
        <h1 class="p-4">Crea Nuovo Progetto</h1>
        <hr>
        <form class="p-4" action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>

    </body>
@endsection
