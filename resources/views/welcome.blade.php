<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JobSlide</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/js/app.js'])
        <!-- Styles -->
        @vite(['resources/css/app.css','resources/css/tailwindcss.css'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white border-2 border-solid">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="text-center my-8 py-2 text-gr font-bold">
                        Welcome to JobSlide!
                    </div>

                    <!--<div class="my-2 py-2">
                        
                    </div> -->

                    <div class="flex gap-8">
                    <div class="w-1/2 rounded-lg">
                        <img src="images/Under-Development.png" alt="Under Development!" />
                    </div>

                    <div class="w-1/2 h-[200px] rounded-lg" style="background: #a8cbed">
                    JobSlide is an application for tracking job applications. It will keep track of job locations,
                        contact persons, application date, and interviews.
                    </div>
                    
                    </div>
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0 mb-2">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
            </div>
        </div>
    </body>
</html>
