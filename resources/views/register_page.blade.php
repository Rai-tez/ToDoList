@extends('partials/header_footer')

@section('content')

<form class="login-block" action="{{ url('/register') }}" method="">
    <div class="center-div-login" style="">
        <h1>Register</h1>
        <div class="row1">
            <span><i class="fa fa-user"></i></span>
            <input type="text" name="username_input" id="" placeholder="Username">
        </div>
        <br>
        <div class="row2">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" name="pass_inpuit" id="" placeholder="Password">
        </div>
        <br>
        <div class="row2">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" name="retyped_pass" id="" placeholder="Retype password">
        </div>
        <br>
        <div class="row5">
            <button style="" type="submit" name= "register"> Sign Up</button>
        </div>
    </div>
</form>

@endsection
