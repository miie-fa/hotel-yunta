<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/ananda-black-personal-use" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/ananda-black-personal-use');
        @import url('https://fonts.cdnfonts.com/css/poppins');
    </style>
</head>
<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/hotel.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; margin: 0; padding: 0; overflow: hidden;">
    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row gx-lg-5 align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-3" style="color: #ffffff; font-family: 'Ananda Black Personal Use', sans-serif; font-size: 28px;">Hotel Citra Megah</h2>
                    <h1 class="mb-3" style="font-size: 48px; color: #ffffff;">
                        Selamat Datang Di <br />
                        Hotel Citra Megah
                    </h1>
                    <p style="color: #ffffff; font-family: 'Poppins', sans-serif; font-size: 16px; max-height: 24px;">Hotel Bintang 5 Terbaik di Indonesia</p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card mx-auto" style="background: rgba(255, 255, 255, 0.5); border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.19); backdrop-filter: blur(10px); border-radius: 26px; width: 484px; ">
                        <div class="card-body py-5 px-md-5">
                            <div class="d-flex justify-content-center">
                                <h2 style="font-family: 'Ananda Black Personal Use', sans-serif; color: #000000">Hotel Citra Megah</h2>
                            </div>
                            <div class="d-flex justify-content-center mb-3" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">
                                <p>Please enter your email and password</p>
                            </div>
                           
                            <form>
                                <!-- Email input -->
                                <div class="form-outline mb-4" style="max-width: 408px; max-height: 60px;">
                                    <label class="form-label" for="inputusermail" style="color: #000000;  font-family: 'Poppins', sans-serif; font-size: 14px;">Email or Username</label>
                                    <input type="text" id="inputusermail" class="form-control" placeholder="Enter your email or username" style="background: none; box-shadow: none; border: 2px solid #DBDBDB; max-width: 408px;"/>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4" style="max-width: 408px; max-height: 60px;">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="inputpassword" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 14px;">Password</label>
                                        <a href="#" class="forgot-password" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" style="color: #EC4C57; text-decoration: none; font-family: 'Poppins', sans-serif; font-size: 14px;">Forgot Password?</a>
                                    </div>
                                    <div class="input-group" style="max-width: 408px;">
                                        <input type="password" id="inputpassword" class="form-control" placeholder="************" style="background: none; box-shadow: none; border: 2px solid #DBDBDB;"/>
                                        <span class="input-group-text" id="togglePassword" style="background: none; border: 2px solid #DBDBDB; cursor: pointer;">
                                            <i class="fa fa-eye-slash" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="checkform" style="background-color: transparent;"/>
                                    <label class="form-check-label" for="checkform" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 14px;">
                                        Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn w-100 mt-2" style="width: 406px; height: 44px; background-color: #162034; color: #ffffff;"><a href="/home" style="text-decoration: none; color: #ffffff; font-family: 'Poppins', sans-serif; font-size: 16px;">Sign In</a></button>
                            </form>
                            <div class="text-center mt-3">
                                <p style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 14px;">Or Sign in With</p>                               
                                <a href="#"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook" style="width: 38px; height: 38px;"></a>
                                <a href="#"><img src="{{ asset('img/google.svg') }}" alt="Google" style="width: 38px; height: 38px;"></a>                                
                            </div>
                            <div class="text-center mt-4">
                                <p style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 14px;">Don't have an account? <a href="/signup" style="text-decoration: none; color: #1D7C82;">Sign Up</a> </p>                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Modal Lupa Password -->
    <div class="modal" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Confirm Password Reset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to reset your password?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" id="confirmReset">Yes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#inputpassword');
        const toggleIcon = document.querySelector('#toggleIcon');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            if (type === 'password') {
                toggleIcon.classList.add('fa-eye-slash');
                toggleIcon.classList.remove('fa-eye');
            } else {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
