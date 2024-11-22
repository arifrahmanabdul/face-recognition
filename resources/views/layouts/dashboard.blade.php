<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/iconly.css') }}">
</head>

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('/assets/compiled/svg/logo.svg') }}" alt="Logo"></a>
                        </div>
                        
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                @include('layouts.menudashboard')
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            

            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                            by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>
