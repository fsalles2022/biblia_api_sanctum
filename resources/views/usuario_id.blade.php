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
    <h1>Lista de usuário Por ID:</h1>
    
<ul>
   @if(isset($users))
     
   <li>Id: {{ $users->id}} </li>
   <li> Nome: {{ $users->name}} </li>
   <li> E-mail: {{ $users->email}} </li>
         
 
     
   @else
      <h3>Não há usuários cadastrados!</h3>
   @endif        
</ul>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>