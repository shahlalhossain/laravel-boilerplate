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
        .separator { width:100%; border-top: 1px solid rgba(0, 0, 0, 0.10); }
    </style>
@endsection

@section('content')

    <main class="main">

        <!-- Start Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h2><strong>Contact</strong></h2>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Start Google Map -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:2px solid lightgray; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8000926847326!2d90.39967867608667!3d23.790131987248362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71265ce4c25%3A0x3a00286f1bde0edd!2sEnvision%20Technology%20Limited!5e0!3m2!1sen!2sbd!4v1729484001258!5m2!1sen!2sbd" width="100%" height="270" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Google Map -->

                <!-- Start Flash Message Section -->
                @if (isset($error))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">{{ $error }}</div>
                @endif
                @if (isset($success))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $success }}</div>
                @endif
                <!-- End Flash Message Section -->

                <!-- Start Contact Information -->
                <div class="row gy-4">

                    <!-- Start Info Section -->
                    <div class="col-lg-4">

                        <!-- Start Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                {{--                                <p>LakeCity, Khilkhet, Dhaka - 1229</p>--}}
                                <p>{{ $contactInformation['address'] }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <!-- Start Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                {{--                                <p>+8801731223344, +8801731334455</p>--}}
                                <p>{{ $contactInformation['mobiles'] }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <!-- Start Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                {{--                                <p>info@example.com, support@example.com</p>--}}
                                <p>{{ $contactInformation['emails'] }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <!-- Start Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-globe flex-shrink-0"></i>
                            <div>
                                <h3>Website</h3>
                                {{--                                <p>www.example.com</p>--}}
                                <p>{{ $contactInformation['website'] }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                    </div>
                    <!-- End Info Section -->

                    <!-- Start Contact Form -->
                    <div class="col-lg-8">
                        <form action="{{ route('contact-post') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="text" class="form-control" name="mobile" placeholder="Your Mobile" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-end">
                                    <div class="loading">Loading...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank You...</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>
                <!-- End Contact Information -->

            </div>
        </section>
        <!-- End Contact Section -->

    </main>

@endsection

@section('footer-scripts')
    <script>

    </script>
@endsection

@push('after-scripts')
    <script src=""></script>
@endpush
