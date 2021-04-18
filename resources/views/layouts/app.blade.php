<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MassList</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="overflow-hidden">

    <nav class="text-white bg-gray-900 flex flex-col sm:flex-row sm:justify-between p-4 items-center">
        <ul class="flex justify-start w-full">
            <a href="/" class="text-md font-semibold px-3 py-1">MassList</a>
        </ul>
        <ul class="flex justify-start w-full sm:justify-end sm:items-center flex-col sm:flex-row">
            @auth
                <span href="" class="px-3 py-1 text-sm">April 23rd to 30th</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-3 py-1 text-sm focus:outline-none">Logout</button>
                </form>
            @endauth
            @guest    
                <a href="{{ route('login') }}" class="px-3 py-1 text-sm">Login</a>
                <a href="{{ route('register') }}" class="px-3 py-1 text-sm">Register</a>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body> 
</html>