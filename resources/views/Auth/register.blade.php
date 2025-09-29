<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('loginform/form_assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('loginform/form_assets/css/style.css') }}">
    <style>
.error-text {
    color: #e3342f;       /* Laravel red */
    font-size: 13px;      /* smaller so it doesn’t clash */
    margin-top: 2px;
    display: block;
    text-align: left;
    padding-left: 28px;   /* aligns with text, not the icon */
}


    </style>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">

                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                    <form method="POST" action="{{ route('handleregister') }}" class="register-form" id="register-form">
                    @csrf

                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                        @error('name')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                        @error('email')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                        @error('password')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                        @error('password_confirmation')
                            <div class="error-text">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                    
                    </form>


                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('loginform/form_assets/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
            <!-- JS -->
    <script src="{{ asset('loginform/form_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('loginform/form_assets/js/main.js') }}"></script>

     <script>
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $("#to-recover").on("click", function () {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $("#to-login").click(function () {
            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>