<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/vendors/ionicons-npm/css/ionicons.css">
    <link rel="stylesheet" href="/vendors/linearicons-master/dist/web-font/style.css">
    <link rel="stylesheet" href="/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css">
    <link href="/styles/css/base.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <a href="/"><div class="logo-src"></div></a>
                <div class="header__pane ms-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon">
                                <span></span>
                            </button>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                @include('layouts.headermenu')

                </div>

            @include('layouts.headerright')

            </div>
        </div>

        {{-- @include('layouts.menulayout') --}}

        @include('layouts.menu')

        <div class="app-main__outer">

            @yield('content')

        @include('layouts.footer')

        </div>
    </div>
    </div>

    {{-- @include('layouts.menusetting') --}}


    <div class="app-drawer-overlay d-none animated fadeIn"></div>

    <!-- plugin dependencies -->
    <script type="text/javascript" src="/vendors/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/vendors/moment/moment.js"></script>
    <script type="text/javascript" src="/vendors/metismenu/dist/metisMenu.js"></script>
    <script type="text/javascript" src="/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js"></script>
    <script type="text/javascript" src="/vendors/jquery-circle-progress/dist/circle-progress.min.js"></script>
    <script type="text/javascript" src="/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/vendors/toastr/build/toastr.min.js"></script>
    <script type="text/javascript" src="/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min.js"></script>
    <script type="text/javascript" src="/vendors/apexcharts/dist/apexcharts.min.js"></script>
    <!-- custome.js -->
    <script type="text/javascript" src="/js/charts/apex-charts.js"></script>
    <script type="text/javascript" src="/js/circle-progress.js"></script>
    <script type="text/javascript" src="/js/demo.js"></script>
    <script type="text/javascript" src="/js/scrollbar.js"></script>
    <script type="text/javascript" src="/js/toastr.js"></script>
    <script type="text/javascript" src="/js/treeview.js"></script>
    <script type="text/javascript" src="/js/form-components/toggle-switch.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
