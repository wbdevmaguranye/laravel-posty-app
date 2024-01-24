<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href ="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
</head>

<body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
           <a href="/">
            <li class="p-3">
                Home
            </li>
        </a>
            <li class="p-3">
               <a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li class="p-3">
                Post
            </li>
        </ul>

        <ul class="flex items-center">
           @auth
            <li >
             <a href="" class="p-3">{{auth()->user()->name}}</a>
            </li>
            <li  >
               <form action="{{route('logout')}}" method="post" class="inline p-3">
                @csrf
                <button type="submit"> Logout</button>
               </form>
            </li>

                   @endauth
            @guest


            <li class="p-3">
             <a href="{{route('login')}}">Login</a>
            </li>
            <li class="p-3">
                <a href="{{ route('register') }}">
                    Register</a>
            </li>
            @endguest



        </ul>
    </nav>
    @yield('content')
</body>

</html>
