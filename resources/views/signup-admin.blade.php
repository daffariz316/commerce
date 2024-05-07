<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="{{ asset('asset/css/signup/style.css') }}">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('admin-signup') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login" onclick="window.location.href='{{ route('admin-login') }}';">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button id="register">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('asset/js/login/script.js') }}"></script>
</body>
</html>
