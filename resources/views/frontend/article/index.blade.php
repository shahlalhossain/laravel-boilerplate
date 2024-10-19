@extends('frontend.layout.master')

@section('title', __('Contact'))

@section('meta')
    <meta name="keywords" content="">
@endsection

@push('after-styles')
    <link rel="stylesheet" href="">
@endpush

@section('header-styles')
    <style>

        .card-img-left { display:block; }
        .card-img-top { display:none; }

        @media (max-width: 640px) and (min-width: 120px){
            .card-img-left { display:none; }
            .card-img-top { display:block; }
        }

        .card {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }
    </style>
@endsection

@section('content')

    <main class="main">

        <!-- Start Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Articles: {{ 'All' }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Articles</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <!-- Start Article Item -->
                    <div class="card flex-sm-row flex-column d-flex shadow" style="margin: 20px 0 30px 0;">
                        <img class="card-img-top" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <img class="card-img-left" src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="" height="auto" width="220">
                        <div class="card-body">
                            <h4 class="card-title h5 h4-sm">
                                <a href="{{ route('article.show', 1) }}">Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality</a>
                            </h4>
                            <hr>
                            <div class="row">
                                <div class="col-4"><i class="bi bi-alarm"></i> Oct 1, 2024</div>
                                <div class="col-4"><i class="bi bi-calendar3"></i> 1200</div>
                                <div class="col-4"><i class="bi bi-chat-square-text"></i> 12</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-folder"></i> Business</a>
                                </div>
                                <div class="col-8">

                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Creative</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Tips</a>
                                    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-tags"></i> Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Article Item -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>

                    <br><br>
                </div>

                <div class="col-lg-4 sidebar">
                    <div class="widgets-container">

                        <!-- Start Search Widget -->
                        <div class="search-widget widget-item">
                            <form action="">
                                <input type="text" name="keywords" placeholder="Search">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <!--End Search Widget -->

                        <!-- Start Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            <!-- Start Recent Post Item-->
                            <div class="post-item">
                                <img src="{{ asset('themes/zenblog/assets/img/blog/blog-recent-1.jpg') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('article.show', 1) }}">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End Recent Post Item-->

                            <!-- Start Recent Post Item-->
                            <div class="post-item">
                                <img src="{{ asset('themes/zenblog/assets/img/blog/blog-recent-2.jpg') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('article.show', 1) }}">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End Recent Post Item-->

                            <!-- Start Recent Post Item-->
                            <div class="post-item">
                                <img src="{{ asset('themes/zenblog/assets/img/blog/blog-recent-3.jpg') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('article.show', 1) }}">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End Recent Post Item-->

                            <!-- Start Recent Post Item-->
                            <div class="post-item">
                                <img src="{{ asset('themes/zenblog/assets/img/blog/blog-recent-4.jpg') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('article.show', 1) }}">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div>
                            <!-- End Recent Post Item-->

                            <!-- Start Recent Post Item-->
                            <div class="post-item">
                                <img src="{{ asset('themes/zenblog/assets/img/blog/blog-recent-5.jpg') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('article.show', 1) }}">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>
                            </div><!-- End recent post item-->

                        </div>
                        <!--End Recent Posts Widget -->

                        <!-- Start Tags Widget -->
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                        <!-- End Tags Widget -->

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
