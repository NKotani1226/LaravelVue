<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>userList</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
       
        <div class="container mt-5">
            <h2 class="mb-3">ALL</h2>
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{ $user->id }}: {{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>
        
        <div class="container mt-5">
            <h2 class="mb-3">PAGENATE</h2>
            <ul class="list-group">
                @foreach ($pagenate as $user)
                    <li class="list-group-item">{{ $user->id }}: {{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>

        <div class="container mt-5">
            <h2 class="mb-3">WHERE</h2>
            <ul class="list-group">
                @foreach ($whereData as $user)
                    <li class="list-group-item">{{ $user->id }}: {{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>

        <div class="container mt-5">
            <h2 class="mb-3">WHEREBETEEN</h2>
            <ul class="list-group">
                @foreach ($whereBetween as $user)
                    <li class="list-group-item">{{ $user->id }}: {{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
