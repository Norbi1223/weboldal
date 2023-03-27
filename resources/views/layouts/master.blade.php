<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Londrina Shadow' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>

<body
  class="bg-image"
  style="
    background-image: url('https://img.freepik.com/free-vector/dark-hexagonal-background-with-gradient-color_79603-1410.jpg?w=900&t=st=1677747793~exp=1677748393~hmac=d9689e0877d27aa6e558213eddb7c0dbc0deef016c8d80beca119539e8e2d89a');
    height: 100vh;">
    @yield('content')
    <footer class="text-center text-lg-start text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Készítette:
        <b>Fehér Dávid Róbert és Katona Norbert</b>
      </div>
    </footer>
    
</body>
</html>