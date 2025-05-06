<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MasFana Simple Login</title>

        <meta name="description" content="Simple Login with Laravel and Tailwind CSS">
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/imamamacuuu/FanaImage/main/uploads/image.ico" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body::before {
                content: "";
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
                background-size: 40px 40px;
                z-index: 0;
                pointer-events: none;
            }
        </style>
    </head>

    <body class="relative bg-black font-sans text-white">

        @if (!request()->is('login'))
            <x-navbar></x-navbar>
        @endif

        <div class="relative z-10">
            @yield('content')
        </div>
        @if (!request()->is('login'))
            <x-footer></x-footer>
        @endif
    </body>

</html>
