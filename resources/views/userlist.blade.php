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
            <h2>ALLDATA</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>PAGENATE</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagenate as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>WHERE</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($whereData as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>WHEREBETEEN</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($whereBetween as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>JOINDATA</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                        <th>POST TITLE</th>
                        <th>POST CONTENT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($join as $data)
                        <tr>
                            <td>{{ $data->user->id }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->user->email }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->content }}</td>
                        </tr>
                    @endforeach
                    <tr></tr>
                </tbody>
            </table>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
