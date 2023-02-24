<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    <title>Tasuke</title>
</head>
<body>
    <header>
        <nav>
            <a class="navbar-logo" href="{{ url('/') }}">
                <img src="{{ asset('images\logo\png\tasuke-high-resolution-logo-white-on-transparent-background.png') }}" alt="Tasuke Logo" style="width:50px">
            </a>
            @if(false) {{-- if online status !null, then display the ff, other wise, register and login --}}
                <a class="links" href="#"><i class="fa fa-fw fa-user"></i> Logout</a>
                <a class="links" href=""><i class="fa fa fa-fw fa-user"></i> Profile</a>
                <a class="links" href=""><i class="fa fa fa-fw fa-info"></i> About</a>
            @else
                <a class="links" href="{{ url('/login') }}"><i class="fa fa-fw fa-user"></i> Login</a>
                <a class="links" href="{{ url('/register') }}"><i class="fa fa-fw fa-pencil"></i> Register</a>
                <a class="links" href="{{ url('/todolist') }}"><i class="fa fa fa-fw fa-info"></i> About</a> <!--temporary-->
            @endif
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="socials">
            <a class="links" href=""><i class="fa fa-youtube"></i> Youtube</a>
            <a class="links" href=""><i class="fa fa-linkedin"></i> LinkedIn</a>
            <a class="links" href=""><i class="fa fa-github"></i> GitHub</a>
            <a class="links" href=""><i class="fa fa-facebook"></i> Facebook</a>
            <a class="links" href=""><i class="fa fa-twitter"></i> Twitter</a>
        </div>
        <p class="creator"><em>@Raitez</em></p>
    </footer>
</body>
</html>
