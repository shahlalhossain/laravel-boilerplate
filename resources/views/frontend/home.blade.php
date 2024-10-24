@extends('frontend.layout.master')

@section('title', __('Home'))

@section('meta')
    <meta name="keywords" content="">
@endsection

@push('after-styles')
    <link rel="stylesheet" href="">
@endpush

@section('header-styles')
    <style>
        .separator { width:100%; border-top: 1px solid rgba(0, 0, 0, 0.10); }
    </style>
@endsection

@section('content')
    <main class="main">

        <!-- Start Featured Articles as Slider Section -->
        <section id="slider" class="slider section dark-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": { "delay": 5000 },
                          "slidesPerView": "auto",
                          "centeredSlides": true,
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                          }
                        }
                    </script>

                    <div class="swiper-wrapper">

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-1.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>



                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-2.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-3.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-4.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>
                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-1.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-2.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-3.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                        <?php $imagePath = 'themes/zenblog/assets/img/post-slide-4.jpg'; ?>
                        <div class="swiper-slide" style="background-image: url(<?php echo $imagePath ?>);">
                            <div class="content">
                                <h2><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- End Featured Articles as Slider Section -->

        <!-- Start Trending Section -->
        <section id="trending-category" class="trending-category section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <!-- Start Trending Section Left Side Content -->
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                                <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-5.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Food</span> <span class="mx-1">•</span> <span>Jul 17th '22</span></div>
                                                <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-7.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Design</span> <span class="mx-1">•</span> <span>Mar 15th '22</span></div>
                                                <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                                <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-6.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">•</span> <span>Mar 1st '22</span></div>
                                                <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-8.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                                <h2><a href="blog-details.html">5 Great Startup Tips for Female Founders</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                                <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-5.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Food</span> <span class="mx-1">•</span> <span>Jul 17th '22</span></div>
                                                <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-stretch">
                                    <div class="card post-entry">
                                        <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-7.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="post-meta"><span class="date">Design</span> <span class="mx-1">•</span> <span>Mar 15th '22</span></div>
                                                <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trending Section Left Side Content -->

                        <!-- Start Trending Section Right Side Content -->
                        <div class="col-lg-3">
                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    <li>
                                        <a href="blog-details.html"><span class="number">1</span>
                                            <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                            <span class="author">Jane Cooper</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">2</span>
                                            <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                            <span class="author">Wade Warren</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">3</span>
                                            <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                                            <span class="author">Esther Howard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">4</span>
                                            <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                            <span class="author">Cameron Williamson</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">5</span>
                                            <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                            <span class="author">Jenny Wilson</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">6</span>
                                            <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                            <span class="author">Jane Cooper</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html"><span class="number">7</span>
                                            <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                            <span class="author">Wade Warren</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Trending Section Right Side Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Trending Section -->

        <!-- Start Culture Section -->
        <section id="culture-category" class="culture-category section">

            <!-- Start Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h2>Culture</h2>
                    <p><a href="categories.html">See All Culture</a></p>
                </div>
            </div>
            <!-- End Section Title -->

            <!-- Start Section Content -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-3">

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>
                    <div class="col-md-9 border-start custom-border">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Content -->

        </section>
        <!-- End Culture Section -->

        <!-- Start Business Section -->
        <section id="business-category" class="business-category section">

            <!-- Start Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h2>Business</h2>
                    <p><a href="categories.html">See All Business</a></p>
                </div>
            </div>
            <!-- End Section Title -->

            <!-- Start Section Content -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 border-start custom-border">

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Section Content -->

        </section>
        <!-- End Business Section -->

        <!-- Start Lifestyle Section -->
        <section id="lifestyle-category" class="lifestyle-category section">

            <!-- Start Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h2>Lifestyle</h2>
                    <p><a href="categories.html">See All Lifestyle</a></p>
                </div>
            </div>
            <!-- End Section Title -->

            <!-- Start Section Content -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-3">

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>
                    <div class="col-md-9 border-start custom-border">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-1.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-2.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card post-list border-bottom">
                                    <img class="card-img-top" src="themes/zenblog/assets/img/post-landscape-3.jpg" alt="CardImage" style="margin-bottom: 10px; !important;">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                            <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                            <span class="author mb-3 d-block">Jenny Wilson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Content -->

        </section>
        <!-- End Lifestyle Section -->

    </main>
@endsection

@section('footer-scripts')
    <script>

    </script>
@endsection

@push('after-scripts')
    <script src=""></script>
@endpush
