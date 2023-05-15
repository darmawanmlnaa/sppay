<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Sppay</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/modules/fontawesome/css/all.min.css') ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/modules/bootstrap-social/bootstrap-social.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/css/components.css') ?>">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
    </script>
<!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                <div class="card-header"><h4>Masuk</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Kata sandi</label>
                        <div class="float-right">
                            <a href="https://web.whatsapp.com/" class="text-small">
                            Lupa kata sandi?
                            </a>
                        </div>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="seepass" class="custom-control-input" tabindex="3" id="seepass" onclick="seePassword()">
                        <label class="custom-control-label" for="seepass">Lihat kata sandi</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                        </button>
                    </div>
                    </form>

                </div>
                </div>
                <div class="mt-5 text-muted text-center">
                Login Sebagai <a href="{{ route('login') }}">Petugas</a>
                </div>
                <div class="simple-footer">
                Copyright &copy; SPPAY 2023
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/jquery.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/popper.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/tooltip.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/modules/moment.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/js/stisla.js') ?>"></script>
    
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    
    <!-- Template JS File -->
    <script src="<?= asset('assets/vendor/stisla/dist/assets/js/scripts.js') ?>"></script>
    <script src="<?= asset('assets/vendor/stisla/dist/assets/js/custom.js') ?>"></script>
    <!-- See password -->
    <script type="text/javascript">
        function seePassword() {
            var pass = document.getElementById("password");
            if (pass.type === "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }

            var passConfirm = document.getElementById("password_confirmation");
            if (passConfirm.type === "password") {
                passConfirm.type = "text";
            } else {
                passConfirm.type = "password";
            }
        }
    </script>
</body>
</html>