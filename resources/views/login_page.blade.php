@extends('partials/header_footer')

@section('content')

<form class="login-block" action="{{ url('/login') }}" method="POST">
    @csrf
    <div class="center-div-login" style="">
        <h1>Login</h1>
        <h3>{{ session('login_msg') }}</h3>
        <div class="">
            <span><i class="fa fa-user"></i></span>
            <input type="text" name="username_input" id="" placeholder="Username">
        </div>
        <br>
        <div class="">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" name="pass_input" id="" placeholder="Password">
        </div>
        <div class="">
            <a href="" style="text-decoration: none"><p style="color: lightgrey">Forgot Password?</p></a>
        </div>
        <div class="">
            <button type="submit" name="submit" value="login_submit"> Login</button>
        </div>
        <br>
        <div class="">
            <button type="submit" name="submit" value="register_submit"> Sign Up</button>
        </div>
    </div>
</form>

@endsection
