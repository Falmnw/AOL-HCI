@extends('layout.auth')
@section('title', 'login')

@section('content')
<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <div class="logo d-flex justify-content-center mb-3" style="margin-top: 8px; margin-bottom: 8px;">
                <img src="{{ asset('assets/images/logo-apk-hci.png') }}" alt="logo apk simple" class="logo-apk">
            </div>
            <header>Login</header>
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    Wrong email/password
                </div>
            @endif
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                {{-- <a href="#">Forgot password?</a> --}}
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">
                    Don't have an account?
                    <a href="{{route('register')}}">Sign up</a>
                </span>
            </div>
        </div>
    </div>
</body>
@endsection
