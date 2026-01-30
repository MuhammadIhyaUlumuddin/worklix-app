<!DOCTYPE html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="{{ asset('assets/') }}"
    data-template="vertical-menu-template-free">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | Worklix</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}">

    {{-- Core CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

    {{-- Vendors CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

    {{-- Page CSS --}}
    @stack('styles')

    {{-- Helpers --}}
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    {{-- Config --}}
    <script src="{{ asset('assets/js/config.js') }}"></script>

</head>

<body>

    {{-- Layout wrapper --}}
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- Menu --}}
            @include('partials.sidebar')

            {{-- Layout container --}}
            <div class="layout-page">
                {{-- Navbar --}}
                @include('partials.navbar')

                {{-- Content wrapper --}}
                <div class="content-wrapper">
                    {{-- Content --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    {{-- /Content --}}

                    {{-- Footer --}}
                    @include('partials.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                {{-- /Content wrapper --}}
            </div>
            {{-- /Layout container --}}
        </div>

        {{-- Overlay --}}
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    {{-- /Layout wrapper --}}

    {{-- Modals --}}
    @yield('modals')

    {{-- Core JS --}}
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    {{-- Vendors JS --}}
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- Page JS --}}
    @stack('scripts')

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>
