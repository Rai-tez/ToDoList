<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Tasuke</title>
</head>
<body>
    <header>
        <nav>
            <a class="navbar-logo" href="#">
                <img src="{{ asset('images\logo\png\tasuke-high-resolution-logo-color-on-transparent-background.png') }}" alt="Tasuke Logo" style="width:50px">
            </a>
            @if(false) {{-- if online status !null, then display the ff, other wise, register and login --}}
            {{--
                <a class="links" href="#"><i class="fa fa fa-fw fa-user"></i> Profile</a>
                <a class="links" href="#"><i class="fa fa-fw fa-user"></i> Logout</a>

            --}}
            @else
                <a class="links" href="#"><i class="fa fa-fw fa-envelope"></i> Register</a>
                <a class="links" href="#"><i class="fa fa-fw fa-user"></i> Login</a>
            @endif
        </nav>
    </header>

    @yield('content')

    <footer>

    </footer>
</body>
</html>
