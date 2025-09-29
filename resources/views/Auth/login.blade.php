<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('loginform/form_assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('loginform/form_assets/css/style.css') }}">
</head>
<body>

    <div class="main">

       
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('loginform/form_assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="row pb-4">
                            <div class="col-12">
                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="allert alert-danger">Not Valid Email or Password</div>
                                @endforeach
                                @endif
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        @if (session('msg'))
                            <div class="alert alert-danger">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <style>
                            .alert {
                                background-color: #f8d7da;  /* light red */
                                color: #721c24;            /* dark red text */
                                border: 1px solid #f5c6cb;
                                padding: 10px 15px;
                                border-radius: 6px;
                                margin-bottom: 15px;
                                font-size: 14px;
                            }
                      </style>


                <form method="POST" action="{{ route('handlelogin') }}">
                    @csrf

                    <div class="form-group">
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
                @error('email')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                @error('password')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>


                    <button type="submit" class="btn btn-primary">Login</button>
                </form>



                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

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