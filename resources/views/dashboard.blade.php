@extends('layouts.backoffice')

@section('content')

    <body class="bg-light">
        <h1 class="p-3">Benvenuto nella Dashboard</h1>
        <a class="btn btn-primary p-3 m-3" href="{{ route('projects.index') }}">Gestione Progetti</a>
    </body>
@endsection
