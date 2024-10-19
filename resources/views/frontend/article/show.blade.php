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

    </style>
@endsection

@section('content')

    <main class="main">

        <!-- Start Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Article Details</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('article.index') }}">Articles</a></li>
                        <li class="current">Article Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Start Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">
                            <article class="article">

                                <div class="post-img">
                                    <img src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" alt="..." class="img-fluid" style="border: 2px solid lightgray;">
                                </div>

                                <h2 class="title">
                                    Beautiful Bangladesh: A Journey Through Nature, Culture, Harmony, A Land of Rivers, Heritage and Warm Hospitality
                                </h2>

                                <!-- Start Meta Top -->
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Oct 1, 2024</time></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-book"></i> <a href="blog-details.html">1200</a></li>
                                    </ul>
                                </div>
                                <!-- End Meta Top -->

                                <!-- Start Article Content -->
                                <div class="content">
                                    <p>
                                        Bangladesh is a country of breathtaking beauty, with its vast rivers, lush greenery, and golden fields. Known as the "Land of Rivers," it boasts a network of over 700 rivers that crisscross the landscape, making it one of the most fertile regions in the world. The natural beauty of its rural villages, surrounded by paddy fields and coconut trees, offers a serene escape from the bustle of city life.
                                    </p>

                                    <p>
                                        The Sundarbans, the largest mangrove forest on earth and a UNESCO World Heritage Site, is home to the majestic Bengal tiger. This enchanting forest teems with wildlife and presents an alluring mix of land and water, offering a unique ecosystem. Visitors can explore its mysterious creeks and mangrove-covered islands while observing diverse flora and fauna.
                                    </p>

                                    <p>
                                        Cox’s Bazar, the longest natural sea beach in the world, is a major tourist attraction in Bangladesh. With miles of unspoiled sandy shores, vibrant sunsets, and the rhythmic waves of the Bay of Bengal, it draws travelers seeking relaxation and adventure. The nearby coral-rich Saint Martin’s Island further adds to the coastal charm of the country.
                                    </p>

                                    <p>
                                        The hills of Bandarban and Rangamati present another side of Bangladesh's beauty, with their rolling landscapes, waterfalls, and indigenous cultures. These hill tracts offer exciting trekking opportunities and a glimpse into the traditions of tribal communities. The scenic Kaptai Lake, nestled within these hills, provides a tranquil retreat for nature lovers.
                                    </p>

                                    <p>
                                        Bangladesh’s cities reflect a vibrant blend of tradition and modernity. Dhaka, the bustling capital, is known for its rich history, architectural marvels, and colorful festivals. On the other hand, the historic city of Sylhet offers a mix of spiritual heritage and natural wonders, with tea gardens, hills, and rivers enhancing its allure.
                                    </p>

                                    <p>
                                        Beyond its landscapes, the warmth and hospitality of the Bangladeshi people make every visit memorable. Whether it's sharing a meal of traditional dishes or engaging in local festivals, visitors feel at home in this welcoming nation. Bangladesh’s unique mix of nature, culture, and history makes it an unforgettable destination.
                                    </p>
                                </div>
                                <!-- End Article Content -->

                                <!-- Start Meta Bottom -->
                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Business</a></li>
                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div>
                                <!-- End Meta Bottom -->

                            </article>
                        </div>
                    </section>
                    <!-- End Blog Details Section -->

                    <!-- Blog Comments Section -->
                    <section id="blog-comments" class="blog-comments section">
                        <div class="container">
                            <h4 class="comments-count">5 Comments</h4>

                            <!-- Start Comment Item -->
                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('themes/zenblog/assets/img/blog/comments-1.jpg') }}" alt=""></div>
                                    <div>
                                        <h5><a href="">Georgia Reader</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment Item -->

                            <!-- Start Comment Item -->
                            <div id="comment-2" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('themes/zenblog/assets/img/blog/comments-2.jpg') }}" alt=""></div>
                                    <div>
                                        <h5><a href="">Aron Alvarado</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment Item -->

                            <!-- Start Comment Item -->
                            <div id="comment-3" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('themes/zenblog/assets/img/blog/comments-3.jpg') }}" alt=""></div>
                                    <div>
                                        <h5><a href="">Nolan Davidson</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment Item -->

                            <!-- Start Comment Item -->
                            <div id="comment-4" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('themes/zenblog/assets/img/blog/comments-4.jpg') }}" alt=""></div>
                                    <div>
                                        <h5><a href="">Kay Duggan</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <!-- End Comment Item -->

                            <!-- Start Comment Item -->
                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('themes/zenblog/assets/img/blog/comments-1.jpg') }}" alt=""></div>
                                    <div>
                                        <h5><a href="">Georgia Reader</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Comment Item -->

                        </div>

                    </section>
                    <!-- End Blog Comments Section -->

                    @guest
                        <!-- Start Login Section -->
                        <section class="shadow text-center" style="margin-left: 13px; margin-right: 13px;">
                            <div class="container">
                                <p>Please Login to Post Your Comment</p>
                                <a href="" class="btn btn-sm btn-primary">Login</a> &nbsp;&nbsp;&nbsp; <i>Or</i> &nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-sm btn-success">Registration</a>
                            </div>
                        </section>
                        <!-- End Login Section -->
                    @else
                        <!-- Start Comment Form Section -->
                        <section id="comment-form" class="comment-form section">
                            <div class="container">
                                <form action="">
                                    <h4>Post Comment</h4>
                                    <p>Required fields are marked * </p>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                        <!-- End Comment Form Section -->
                    @endguest
                </div>
                <div class="col-lg-4 sidebar">
                    <div class="widgets-container">

                        <!-- Start Blog Author Widget -->
                        <div class="blog-author-widget widget-item">
                            <div class="d-flex flex-column align-items-center">
                                <div class="d-flex align-items-center w-100">
                                    <img src="{{ asset('themes/zenblog/assets/img/author/male_author.png') }}" class="rounded-circle flex-shrink-0" alt="...">
                                    <div>
                                        <h4>Shahlal Hossain</h4>
                                        <div class="social-links pb-2 pt-2">
                                            <a href="https://x.com/#"><i class="bi bi-twitter-x fs-5"></i></a>
                                            <a href="https://facebook.com/#"><i class="bi bi-facebook fs-5"></i></a>
                                            <a href="https://instagram.com/#"><i class="biu bi-instagram fs-5"></i></a>
                                            <a href="https://instagram.com/#"><i class="biu bi-linkedin fs-5"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-half text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4"><a href="{{ route('article.show', 1) }}">{{ 18 }} Articles</a></div>
                                <div class="col-4">Ratings: {{ 4.5 }}</div>
                                <div class="col-4">{{ 12 }} Reviews</div>
                            </div>
                        </div>
                        <!-- End Blog Author Widget -->

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
