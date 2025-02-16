<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Qualitest Engenharia
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- FONTES. -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: "Inter", sans-serif;
    };
    </style>
    @livewireStyles
</head>
<body class='dark:bg-slate-900'>

    @include('Navbar')

    @yield('content')

    @include('Footer')
    @include ('NavbarScript')

    @livewireScripts
</body>
</html>