<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="asset-login/style.css">
    <title>Login/Register</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <span>or use your email for registration</span>
                @csrf
                <input type="text" name="name" placeholder="User" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>

        </div>
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <span>or use your email password</span>
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To </h1>
                    <h1>DosenKeren.ID </h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello </h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="asset-login/script.js"></script>
</body>

</html>