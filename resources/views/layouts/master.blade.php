<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        >
</script>
<link href='https://fonts.googleapis.com/css?family=Londrina Shadow' rel='stylesheet'>
    <title>@yield('title')</title>
</head>

<body
  class="bg-image"
  style="
    background-image: url('https://img.freepik.com/free-vector/dark-hexagonal-background-with-gradient-color_79603-1410.jpg?w=900&t=st=1677747793~exp=1677748393~hmac=d9689e0877d27aa6e558213eddb7c0dbc0deef016c8d80beca119539e8e2d89a');
    height: 100vh;">
    @yield('content')
</body>
</html>