<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="{{route('home')}}" class="p-3">Home</a>
        </li>
        <li>
            <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
        </li>
    </ul>


    <ul class="flex items-center">
        @auth
            <li>
                <a href="#" class="p-3">{{auth()->user()->name}}</a>
            </li>
            <li>
                <form action="{{route('logout')}}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
            <li>
                <a href="{{route('login')}}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">Register</a>
            </li>
        @endguest
    </ul>
</nav>

<div class="container mx-auto mt-6">
    @yield('content')
</div>

</body>
</html>
