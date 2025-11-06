<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f8f9fa;
                color: #1b1b18;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 1100px;
                margin: 0 auto;
                padding: 2rem;
            }
            nav a {
                color: #4f46e5;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.2s ease;
            }
            nav a:hover {
                color: #312e81;
            }
        </style>
    @endif
</head>
<body class="antialiased">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Brand / Logo -->
                <a class="flex items-center text-xl font-extrabold text-indigo-700" href="{{ url('/') }}">
                    <i data-lucide="code-slash" class="w-6 h-6 mr-2"></i>
                    Agung Portfolio
                </a>

                <!-- Navbar Menu -->
                <div class="hidden md:flex space-x-6">
                    <!-- Home -->
                    <a href="{{ url('/') }}"
                        class="transition duration-150 ease-in-out font-medium
                        {{ request()->is('/') ? 'text-indigo-700 font-bold border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-indigo-700' }}">
                        <i data-lucide="home" class="w-4 h-4 inline-block mr-1"></i> Home
                    </a>

                    <!-- Portfolio -->
                    <a href="{{ route('portfolio.index') }}"
                        class="transition duration-150 ease-in-out font-medium
                        {{ request()->is('portfolio*') ? 'text-indigo-700 font-bold border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-indigo-700' }}">
                        <i data-lucide="briefcase" class="w-4 h-4 inline-block mr-1"></i> Portfolio
                    </a>

                    <!-- Contact -->
                    <a href="{{ url('/contact') }}"
                        class="transition duration-150 ease-in-out font-medium
                        {{ request()->is('contact') ? 'text-indigo-700 font-bold border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-indigo-700' }}">
                        <i data-lucide="mail" class="w-4 h-4 inline-block mr-1"></i> Contact
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 text-gray-500 hover:text-indigo-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container py-10">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
