<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('loginform/form_assets/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('loginform/form_assets/css/style.css')); ?>">
</head>
<body>

    <div class="main">

       
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo e(asset('loginform/form_assets/images/signin-image.jpg')); ?>" alt="sing up image"></figure>
                        <a href="<?php echo e(route('register')); ?>" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="row pb-4">
                            <div class="col-12">
                                <?php if($errors->any()): ?>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="allert alert-danger">Not Valid Email or Password</div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <?php if(session('msg')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('msg')); ?>

                            </div>
                        <?php endif; ?>
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


                <form method="POST" action="<?php echo e(route('handlelogin')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger d-block mt-1"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger d-block mt-1"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
    <script src="<?php echo e(asset('loginform/form_assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('loginform/form_assets/js/main.js')); ?>"></script>

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
</html><?php /**PATH C:\Users\yassa\Downloads\Courses_iti_project\resources\views/auth/login.blade.php ENDPATH**/ ?>