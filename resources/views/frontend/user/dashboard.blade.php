@extends('frontend.layout.master')

@section('title', __('Dashboard'))

@section('meta')
    <meta name="keywords" content="">
@endsection

@push('after-styles')
    <link rel="stylesheet" href="">
@endpush

@section('header-styles')
    <style>
        .separator { width:100%; border-top: 1px solid rgba(0, 0, 0, 0.10); }
        /*.custom-border { margin-top: 30px; margin-bottom: 10px; }*/
    </style>
@endsection

@section('content')

    <main class="main">
{{--        <div class="container position-relative d-flex align-items-center justify-content-between">--}}
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-3 pt-3 border-end custom-border">
                    <div class="d-flex flex-column flex-shrink-0 bg-dark-subtle rounded">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <i class="me-2 bi bi-speedometer2"></i> My Dashboard
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> My Profile
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> Favorite Articles
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> My Comments
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> My Activities
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> My Login History
                                </a>
                            </li><li class="separator"></li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-dark">
                                    <i class="me-2 bi bi-speedometer2"></i> Account Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9 pt-3" style="min-height: 500px;">
                    <div class="row">
                        <div class="col-md-4 pb-3">
                            <div class="card bg-info-subtle text-center">
                                <div class="card-body">
                                    <div class="card-title"><strong>Total Read</strong></div>
                                    <hr>
                                    <div class="card-text">
                                        {{ 120 }} Articles
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pb-3">
                            <div class="card bg-light text-center">
                                <div class="card-body">
                                    <div class="card-title"><strong>Total Favorite</strong></div>
                                    <hr>
                                    <div class="card-text">
                                        {{ 120 }} Articles
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pb-3">
                            <div class="card bg-success-subtle text-center">
                                <div class="card-body">
                                    <div class="card-title"><strong>Total Comments</strong></div>
                                    <hr>
                                    <div class="card-text">
                                        {{ 120 }} Articles
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('footer-scripts')
    <script>

    </script>
@endsection

@push('after-scripts')
    <script src=""></script>
@endpush
