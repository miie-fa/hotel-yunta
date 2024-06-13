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
    <title>Sign Up</title>
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
                    <div class="card mx-auto" style="background: rgba(255, 255, 255, 0.5); border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.19); backdrop-filter: blur(10px); border-radius: 26px; max-width: 484px;">
                        <div class="card-body py-5 px-md-5">
                            <div class="d-flex justify-content-center">
                                <h2 style="font-family: 'Ananda Black Personal Use', sans-serif; color: #000000">Hotel Citra Megah</h2>
                            </div>
                            <div class="d-flex justify-content-center mb-2" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">
                                <p>Fill Your Registration Form</p>
                            </div>
                            <form id="signupForm">
                                <!-- Username input -->
                                <div class="form-outline mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="inputusername" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">Username</label>
                                        <div id="error-username" style="color: #EC4C57; display: none;"></div>
                                    </div>
                                    <input type="text" id="inputusername" class="form-control" placeholder="Input Username" style="background: none; box-shadow: none; border: 2px solid #DBDBDB; max-width: 408px; max-height: 50px;"/>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="inputemail" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">Email</label>
                                        <div id="error-email" style="color: #EC4C57; display: none; font-family: 'Poppins', sans-serif; font-size: 16px;">Email Harus Diisi</div>
                                    </div>
                                    <input type="email" id="inputemail" class="form-control" placeholder="Input Email" style="background: none; box-shadow: none; border: 2px solid #DBDBDB; max-width: 408px; max-height: 50px;"/>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-2" style="max-width: 408px;">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="inputpassword" style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">Password</label>
                                        <div id="error-password" style="color: #EC4C57; display: none; font-family: 'Poppins', sans-serif; font-size: 16px;">Password Harus Diisi</div>
                                    </div>
                                    <div class="input-group" style="max-width: 408px;">
                                        <input type="password" id="inputpassword" class="form-control" placeholder="************" style="background: none; box-shadow: none; border: 2px solid #DBDBDB; max-height: 50px;"/>
                                        <span class="input-group-text" id="togglePassword" style="background: none; border: 2px solid #DBDBDB; cursor: pointer;">
                                            <i class="fa fa-eye-slash" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                </div>

                                {{-- <div class="mb-3" id="error-message" style="color: red; display: none;"></div> --}}

                                <button type="submit" class="btn w-100" style="max-width: 406px; max-height: 44px; background-color: #162034;"><a href="#" id="signupButton" style="text-decoration: none; color: #ffffff; font-family: 'Poppins', sans-serif; font-size: 16px;">Sign Up</a></button>
                            </form>
                            <div class="text-center mt-2">
                                <p style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">Or Sign up With</p>                               
                                <a href="#"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook" style="width: 38px; height: 38px;"></a>
                                <a href="#"><img src="{{ asset('img/google.svg') }}" alt="Google" style="width: 38px; height: 38px;"></a>                                
                            </div>
                            <div class="text-center mt-2">
                                <p style="color: #000000; font-family: 'Poppins', sans-serif; font-size: 16px;">Have an account? <a href="/signin" style="text-decoration: none; color: #1D7C82;">Sign In</a> </p>                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

        const signupForm = document.getElementById('signupForm');
        const errorUsername = document.getElementById('error-username');
        const errorEmail = document.getElementById('error-email');
        const errorPassword = document.getElementById('error-password');
        const signupButton = document.getElementById('signupButton');

        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('inputemail').value.trim();
            const password = document.getElementById('inputpassword').value.trim();
            const username = document.getElementById('inputusername').value.trim();

            clearErrors();

            let hasError = false;

            if (!username) {
                errorUsername.textContent = 'Username harus diisi.';
                errorUsername.style.display = 'block';
                hasError = true;
            }

            if (!email) {
                errorEmail.textContent = 'Email harus diisi.';
                errorEmail.style.display = 'block';
                hasError = true;
            }

            if (!password) {
                errorPassword.textContent = 'Password harus diisi.';
                errorPassword.style.display = 'block';
                hasError = true;
            }

            if (hasError) {
                return;
            }

            const registeredEmails = ['user1@example.com', 'user2@example.com', 'user3@example.com'];

            if (registeredEmails.includes(email)) {
                errorEmail.textContent = 'Email telah terdaftar.';
                errorEmail.style.display = 'block';
                return;
            }

            window.location.href = '/signin';
        });

        document.getElementById('inputusername').addEventListener('blur', function() {
            errorUsername.style.display = 'none';
            errorUsername.textContent = '';
        });

        document.getElementById('inputemail').addEventListener('blur', function() {
            errorEmail.style.display = 'none';
            errorEmail.textContent = '';
        });

        document.getElementById('inputpassword').addEventListener('blur', function() {
            errorPassword.style.display = 'none';
            errorPassword.textContent = '';
        });

        function clearErrors() {
            errorUsername.style.display = 'none';
            errorUsername.textContent = '';
            errorEmail.style.display = 'none';
            errorEmail.textContent = '';
            errorPassword.style.display = 'none';
            errorPassword.textContent = '';
        }

    </script>
</body>
</html>
