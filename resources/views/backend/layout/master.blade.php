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

    @stack('before-styles')

{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--        <style>--}}
{{--            {!! Vite::content('resources/css/app.css') !!}--}}
{{--        </style>--}}

    <livewire:styles />

    @stack('after-styles')
    @yield('header-styles')
</head>
<body>
{{--    @include('backend.includes.sidebar')--}}
{{--    @include('backend.includes.header')--}}
{{--    @include('includes.partials.messages')--}}
    @yield('content')
{{--    @include('backend.includes.footer')--}}

    @stack('before-scripts')
{{--        <script>--}}
{{--            {!! Vite::content('resources/js/app.js') !!}--}}
{{--        </script>--}}

    <livewire:scripts />

    @yield('footer-scripts')
    @stack('after-scripts')
</body>
</html>
