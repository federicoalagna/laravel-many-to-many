<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <div class="d-flex justify-content-center mt-4">
        <h1>Benvenuto nel Back Office!</h1>
    </div>
    <div class="p-3">
        <a class="btn btn-primary" href="{{ route('dashboard') }}">Dashboard</a>

        <hr>

        <a class="btn btn-primary" href="{{ route('projects.index') }}">Gestione Progetti</a>
    </div>


</body>

</html>
