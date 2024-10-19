<!doctype html>
<html lang="en">
<head>
    <title>{{ appName() }} | @yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="@yield('meta_author', 'Shahlal Hossain')">
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="keywords" content="laravel, boilerplate, acl, role, permission, authentication, authorization, blog, article, cms, frontend, backend">

    @yield('meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('themes/zenblog/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/zenblog/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/zenblog/assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/zenblog/assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('themes/zenblog/assets/css/main.css') }}">

    @stack('before-styles')

    <livewire:styles />

    @stack('after-styles')
    @yield('header-styles')

</head>
<body class="index-page">

    @include('frontend.includes.header')
{{--    @include('includes.partials.messages')--}}
    @yield('content')
    @include('frontend.includes.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @stack('before-scripts')

    <!-- Vendor JS Files -->
    <script src="{{ asset('themes/zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/zenblog/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('themes/zenblog/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('themes/zenblog/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('themes/zenblog/assets/js/main.js') }}"></script>

    <livewire:scripts />

    @yield('footer-scripts')
    @stack('after-scripts')
</body>
</html>
