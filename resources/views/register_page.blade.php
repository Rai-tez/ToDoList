@extends('partials/header_footer')

@section('content')

<form class="login-block" action="{{ url('/register') }}" method="POST">
    @csrf
    <div class="" style="">
        <h1>Register</h1>
        <div class="">
            <span><i class="fa fa-user"></i></span>
            <input type="text" name="reg_username_input" id="" placeholder="Username">
        </div>
        @error('reg_username_input')
            <p class="err">{{ $message }}</p>
        @enderror
        <br>
        <div class="">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" name="reg_pass_input" id="" minlength="7" placeholder="Password">

        </div>
        @error('reg_pass_input')
            <p class="err">{{ $message }}</p>
        @enderror
        <br>
        <div class="">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" name="reg_retyped_pass_input" id="" placeholder="Retype password">
        </div>
        @error('reg_retyped_pass_input')
            <p class="err">{{ $message }}</p>
        @enderror
        <p class="err">{{ session('mismatch') }}</p>
        <br>
        <div class="">
            <button style="" type="submit" name= "register"> Sign Up</button>
        </div>
    </div>
</form>

@endsection
