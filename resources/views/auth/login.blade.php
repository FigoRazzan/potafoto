<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <!-- SIGN UP FORM -->
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>

                <div style="position: relative;">
                    <input type="text" placeholder=" " required>
                    <span>Username</span>
                </div>

                <div style="position: relative;">
                    <input type="email" placeholder=" " required>
                    <span>Email</span>
                </div>

                <div style="position: relative;">
                    <input type="password" placeholder=" " required>
                    <span>Password</span>
                    <i class="fa fa-eye toggle-password" 
                       style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                    </i>
                </div>

                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>

                <button>Sign Up</button>
            </form>
        </div>

        <!-- SIGN IN FORM -->
        <div class="form-container sign-in">
            <form>
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>

                <div style="position: relative;">
                    <input type="text" placeholder=" " required>
                    <span>Username or Email</span>
                </div>

                <div style="position: relative;">
                    <input type="password" placeholder=" " required>
                    <span>Password</span>
                    <i class="fa fa-eye toggle-password" 
                       style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                    </i>
                </div>

                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forgot Your Password?</a>
                </div>
                

                <button>Sign In</button>
            </form>
        </div>

        <!-- TOGGLE CONTAINER -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To Potafoto!</h1>
                    <p>Enter your personal details to use all site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Welcome To Potafoto</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
