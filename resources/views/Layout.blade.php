<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Qualitest Engenharia
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class='dark:bg-gray-900'>

    @include('Navbar')

    @yield('content')

    @include('Footer')

    @include ('NavbarScript')

</body>
</html>