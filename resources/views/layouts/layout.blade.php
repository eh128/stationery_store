<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Things Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header class="header">
            <ul class="list-container">
                <li><img src="/img/logo.png" alt="all things art logo" width="70"></li>
                <li class="nav-div" id="first-li-a"><a href="/">Home</a></li>
                <li class="nav-div"><a href="/listings">Listings</a></li>
                <li>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-div">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-div">Log In</a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>
        </header>
        
        @yield("content")
        <footer>
            <div class="footer"></div>
        </footer>
    </body>
</html>