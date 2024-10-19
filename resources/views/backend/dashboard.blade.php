@extends('backend.layout.master')

@section('title', __('Dashboard'))

@section('meta')
    <meta name="keywords" content="">
@endsection

@push('after-styles')
    <link rel="stylesheet" href="">
@endpush

@section('header-styles')
    <style>

    </style>
@endsection



@section('content')
    <h1>Admin Dashboard</h1>
    {{--    <img src="{{ Vite::image('logo.png') }}" alt="Laravel Logo">--}}
    {{--    <img src="{{ Vite::asset('resources/images/logo.png') }}">--}}
@endsection


@section('footer-scripts')
    <script>

    </script>
@endsection

@push('after-scripts')
    <script src=""></script>
@endpush


