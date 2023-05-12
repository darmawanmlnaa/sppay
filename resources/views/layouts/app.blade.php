<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sppay &mdash; {{ $title ?? 'Dashboard' }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/vendor/stisla/dist/assets/modules/fontawesome/css/all.min.css') ?>">

    <!-- My Links Or CSS -->
    @stack('links')

    <!-- DataTables -->
    {{-- bootstrap 4 --}}
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.6.2/css/select.bootstrap4.min.css"> --}}
    {{-- bootstrap 5 --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.6.2/css/select.bootstrap5.min.css"> --}}

    <!-- CSS Libraries -->
    @stack('styles')
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
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        {{-- navbar --}}
        @include('layouts.navbar')

        {{-- sidebar --}}
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2023 SPPAY</div>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
        </div>
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

    <!-- My script -->
    @stack('scripts')

    <!-- Fade alert -->
    <script type="text/javascript">
    $(document).ready(function () {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 1500);
    });
    </script>

    <!-- Priview image -->
    <script type="text/javascript">
        function priviewImage() {
            const image = document.querySelector('#thumb');
            const imgPriview = document.querySelector('.img-priview');

            imgPriview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPriview.src = oFREvent.target.result;
            }
        }
    </script>

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

    <!-- DataTables -->
    {{-- bootstrap 4 --}}
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
	{{-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script> --}}
    {{-- bootstrap 5 --}}
	{{-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> --}}
	{{-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> --}}
	{{-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script> --}}

</body>
</html>