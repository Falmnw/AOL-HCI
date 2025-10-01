@extends('layout.auth')
@section('title', 'register')

@section('content')
<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="registration form">
            <div class="logo d-flex justify-content-center mb-3" style="margin-top: 8px; margin-bottom: 8px;">
                <img src="{{ asset('assets/images/logo-apk-hci.png') }}" alt="logo apk simple" class="logo-apk">
            </div>
            <header>Sign up</header>
            <form action="{{ route('register.post') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Create a password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                <input type="submit" class="button" value="Sign up">
            </form>
            <div class="signup">
                <span class="signup">
                    Already have an account?
                    <a href="{{route('login')}}">Login</a>
                </span>
            </div>
        </div>
    </div>
</body>
@endsection
