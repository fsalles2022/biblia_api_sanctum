<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- the function env get the environment variables from .env file --}}
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <h1>Lista de usuários</h1>

    <ul>
        @if (isset($users))
            @foreach ($users as $user)
                <li> {{ $user->name }} </li>
                <li> {{ $user->email }} </li>
                </br>
            @endforeach
        @else
            <h3>Não há usuários cadastrados!</h3>
        @endif
    </ul>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
