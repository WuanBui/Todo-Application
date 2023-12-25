<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen dark:bg-dots-lighter dark:bg-gray-900 ">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">


            <a href="http://127.0.0.1:8000/register"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>

                    <h2 class="mt-6 text-xl font-semibold text-green-600 dark:text-white">Todo Application</h2>

                    <p class="mt-4 text-green-600 dark:text-green-900 text-sm leading-relaxed">
                        Click here to start the experience !!!
                    </p>
                </div>


            </a>


        </div>
</body>

</html>