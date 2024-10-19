@extends('frontend.layout.master')

@section('title', __('About'))

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

        <!-- Start Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h2 class=""><strong>About</strong></h2>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Who We Are</p>
                        <h3>Unleashing Potential with Creative Strategy</h3>
                        <p class="fst-italic">
                            We are a technology blogging site dedicated to simplifying complex innovations, offering insightful reviews, and exploring future trends. Our mission is to empower tech enthusiasts with concise, actionable content, fostering a global community passionate about learning and growth.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Passion for Innovation</strong> – We explore the latest in tech, bringing fresh insights and trends to curious minds.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Expert Analysis</strong> – Our team dives deep into emerging technologies to provide thoughtful commentary and actionable advice.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>User-Centric Content</strong> – Every post is designed to empower readers, from beginners to seasoned tech enthusiasts.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Simplifying Complexity</strong> – We break down intricate concepts into concise, understandable articles.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Future-Focused</strong> – Anticipating tomorrow’s innovations, we offer a glimpse into what’s next in the tech world.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Comprehensive Reviews</strong> – Our unbiased reviews guide readers in choosing the right tools and gadgets.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Global Community</strong> – Connecting technology lovers across borders through shared ideas and experiences.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Interactive Learning</strong> – Engaging content that encourages discussion, questions, and continuous exploration.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Sustainability in Tech</strong> – Highlighting the intersection of technology and sustainability to inspire mindful innovation.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Committed to Growth</strong> – Evolving with the ever-changing tech landscape to remain a reliable source of knowledge.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="themes/zenblog/assets/img/about-company-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="themes/zenblog/assets/img/about-company-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="themes/zenblog/assets/img/about-company-3.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="themes/zenblog/assets/img/about-company-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="themes/zenblog/assets/img/about-company-3.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="themes/zenblog/assets/img/about-company-1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Start Team Section -->
        <section id="team" class="team section">

            <!-- Start Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h2>Team</h2>
                    <p>A passionate team delivering expert insights and fostering tech conversations.</p>
                </div>
            </div>
            <!-- End Section Title -->

            <!-- Start Section Content -->
            <div class="container">
                <div class="row gy-4">
                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <!-- Start Team Member -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="themes/zenblog/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
            <!-- End Section Content -->

        </section>
        <!-- End Team Section -->

        <br>
    </main>

@endsection

@section('footer-scripts')
    <script>

    </script>
@endsection

@push('after-scripts')
    <script src=""></script>
@endpush
