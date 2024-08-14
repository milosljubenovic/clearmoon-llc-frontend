@extends('themebusiness::frontend.layouts.master')

@section('title')
Home | {{ config('app.name') }}
@endsection

@section('main-content')
<div role="main" class="main">
    @include('themebusiness::frontend.pages.partials.home-banner')

    @include('themebusiness::frontend.pages.partials.home-about')

    {{-- Embedd Messages if any response --}}
    @include('frontend.layouts.partials.messages')

    <section class="section border-0 py-4 m-0">
        <div class="container">
            <div class="row align-items-end pb-3 mb-5 mb-lg-4">
                <div class="col-lg-7 col-xl-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-2">
                        <span class="custom-line appear-animation animated customLineAnimation appear-animation-visible"
                            data-appear-animation="customLineAnimation" appear-animation-duration="1s"
                            style="animation-delay: 100ms;"></span>
                        <div class="overflow-hidden ms-3">
                            <h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation animated maskRight appear-animation-visible"
                                data-appear-animation="maskRight" data-appear-animation-delay="1000"
                                style="animation-delay: 1000ms;">WHAT WE DO</h2>
                        </div>
                    </div>
                    <h3 class="text-color-secondary font-weight-bold text-transform-none text-8 mb-3 pb-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200"
                        style="animation-delay: 1200ms;">Our Services</h3>
                    <p class="mb-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400"
                        style="animation-delay: 1400ms;">We deliver top-tier services in the IT industry, ensuring the highest standards of quality and excellence.</p>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="d-flex justify-content-lg-end">
                        <a href="{{ route('demo.business.service') }}"
                            class="btn btn-primary btn-modern font-weight-bold text-3 btn-px-4 py-3 appear-animation animated fadeInLeftShorter appear-animation-visible"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1800"
                            style="animation-delay: 1800ms;">VIEW ALL SERVICES</a>
                        <a href="{{ route('demo.business.booking_request.create') }}"
                            class="btn btn-secondary btn-modern font-weight-bold text-3 btn-px-4 py-3 ms-4 appear-animation animated fadeInLeftShorter appear-animation-visible"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600"
                            style="animation-delay: 1600ms;">BOOK NOW</a>
                    </div>
                </div>
            </div>
            @include('themebusiness::frontend.pages.partials.our-service')
        </div>
    </section>

    @include('themebusiness::frontend.pages.partials.booking')

    @include('themebusiness::frontend.pages.partials.our-benefit')


    <section class="section section-with-shape-divider border-0 bg-transparent m-0">
        <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                <path fill="#F7F7F7"
                    d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                                            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                                            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                                            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                                            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z">
                </path>
            </svg>
        </div>
        <div class="shape-divider shape-divider-bottom" style="height: 102px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                <path fill="#F7F7F7"
                    d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                                            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                                            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                                            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                                            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z">
                </path>
            </svg>
        </div>
        <div class="container py-5 my-5">
            <div class="row justify-content-center pb-2 mt-2 mb-4">
                <div class="col-lg-9 text-center">
                    <h2 class="text-color-secondary font-weight-bold text-8 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;">Our Process</h2>
                    <p class="custom-font-secondary text-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                        style="animation-delay: 400ms;">Get reliable &amp; affordable IT services today.</p>
                </div>
            </div>
            <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-4">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"
                            style="animation-delay: 300ms;">
                            <div class="box-content text-center">
                                <div class="custom-featured-icon-wrapper bg-secondary mb-4">
                                    <img src="{{ asset('public/modules/theme-business/images/common/ion-calendar-icon.svg') }}"
                                        class="img-fluid icon-featured" alt="" style="filter: invert(100%);">
                                </div>
                                <h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Book Online
                                </h3>
                                <p class="px-3 mb-0">Request a service in online and finish your work without
                                    manual interaction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                            style="animation-delay: 500ms;">
                            <div class="box-content text-center">
                                <div class="custom-featured-icon-wrapper bg-secondary mb-4">
                                    <img src="{{ asset('public/modules/theme-business/images/common/ion-phone.svg') }}"
                                        class="img-fluid icon-featured" alt="" style="filter: invert(100%);">
                                </div>
                                <h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">
                                    Quick call</h3>
                                </h3>
                                <p class="px-3 mb-0"> We are going to connect you to representative ASAP </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"
                            style="animation-delay: 700ms;">
                            <div class="box-content text-center">
                                <div class="custom-featured-icon-wrapper bg-secondary mb-4">
                                    <img src="{{ asset('public/modules/theme-business/images/common/ion-plane-landing.svg') }}"
                                        class="img-fluid icon-featured" alt="" style="filter: invert(100%);">
                                </div>
                                <h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">We're hitting ground running</h3>
                                <p class="px-3 mb-0">We are going to start working on solution imidiately.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- @include('themebusiness::frontend.pages.partials.our-portfolio') -->

    @include('themebusiness::frontend.pages.partials.our-team')

    <section class="section section-with-shape-divider bg-tertiary border-0 m-0">
        <div class="shape-divider" style="height: 116px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 1920 116" preserveAspectRatio="xMinYMin">
                <path class="custom-svg-fill-color-tertiary-darken"
                    d="M0,24c2.86,0.42,7.41,1.1,13,2c6.13,0.98,10.67,1.77,12,2c11.67,2.01,42.24,7.05,68,11
                                            c7.79,1.2,22.72,3.48,41,6c20.75,2.86,38.83,5.06,74,9c41.19,4.61,62.09,6.95,93,10c57.4,5.66,101.17,9.03,114,10
                                            c9.13,0.69,40.29,3.02,109,7c48.33,2.8,87.04,5.04,132,7c76.86,3.35,135.02,4.27,184,5c104.27,1.56,187.39,0.71,234,0
                                            c21.92-0.34,91.62-1.5,183-5c50.62-1.94,106.43-4.12,181-9c57.01-3.73,108.05-7.94,152-12c94.91-8.78,162.37-17.44,182-20
                                            c41.76-5.45,72.06-10.09,96-14c21.23-3.47,39.04-6.63,52-9c0-11.67,0-23.33,0-35C1279-11,638-11-3-11C-2,0.67-1,12.33,0,24z">
                </path>
                <path fill="#FFF"
                    d="M-7,23c1.59,0.23,4.03,0.58,7,1c82.06,11.6,145.17,16.35,182,19c244.62,17.62,377,23,377,23
                                            c157.86,6.42,277.64,7.71,308,8c75.8,0.73,232.89,1.31,438-6c0,0,137.72-4.66,358-19c42.98-2.8,104.01-7.03,183-16
                                            c33.26-3.78,60.85-7.38,80-10c0-9.01,0-18.01,0-27.02c-644,0-1288,0-1932,0C-6.33,4.99-6.67,13.99-7,23z">
                </path>
            </svg>
        </div>
        <div class="shape-divider shape-divider-bottom" style="height: 102px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                <path fill="#F7F7F7"
                    d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                                            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                                            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                                            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                                            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z">
                </path>
            </svg>
        </div>
        <div class="container pt-5 pb-3 mt-4">
            <div class="row mt-5 mb-5">
                <div class="col-lg-4 pe-lg-0 mb-4 mb-lg-0">
                    <h2 class="text-color-light font-weight-bold line-height-6 text-8 mb-3">Our Happy Clients</h2>
                    <p class="text-color-light opacity-7 mb-0">We value our customer needs and provide great service
                        and
                        they are more than happy to stay with us...</p>
                </div>
                <div class="col-lg-8 ps-lg-4">
                    <div class="owl-carousel dots-light dots-align-left owl-theme owl-loaded owl-drag owl-carousel-init"
                        data-plugin-options="{&#39;responsive&#39;: {&#39;0&#39;: {&#39;items&#39;: 1}, &#39;479&#39;: {&#39;items&#39;: 1}, &#39;979&#39;: {&#39;items&#39;: 2}, &#39;1199&#39;: {&#39;items&#39;: 2}}, &#39;margin&#39;: 20, &#39;loop&#39;: true, &#39;dots&#39;: true, &#39;dotsEach&#39;: 1, &#39;nav&#39;: false, &#39;autoplay&#39;: true, &#39;autoplayTimeout&#39;: 5000}"
                        style="height: auto;">

                        <div class="item">
                            <div class="testimonial">
                                <blockquote>
                                    <p>"The team provided outstanding IT support that exceeded our expectations. Their quick response time and professionalism are unmatched."</p>
                                </blockquote>
                                <div class="testimonial-info">
                                    <span class="testimonial-author">John Doe</span>
                                    <span class="testimonial-company">Tech Innovators Inc.</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <blockquote>
                                    <p>"Our cloud infrastructure was set up flawlessly. The service was reliable, and the team's expertise was evident from start to finish."</p>
                                </blockquote>
                                <div class="testimonial-info">
                                    <span class="testimonial-author">Jane Smith</span>
                                    <span class="testimonial-company">Future Enterprises</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <blockquote>
                                    <p>"Exceptional service and support! The IT solutions provided have significantly improved our operational efficiency."</p>
                                </blockquote>
                                <div class="testimonial-info">
                                    <span class="testimonial-author">Michael Brown</span>
                                    <span class="testimonial-company">Global Tech Solutions</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Hide this Price for now --}}
    {{--
        <section class="section section-with-shape-divider overlay overlay-show border-0 m-0"
            style="background-image: url('{{ asset('public/modules/theme-business/images/common/background-1.jpg') }}'); background-size: cover; background-position: center;">
    <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#F7F7F7"
                d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                                            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                                            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                                            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                                            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z">
            </path>
        </svg>
    </div>
    <div class="shape-divider shape-divider-bottom" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#FFF"
                d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                                            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                                            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                                            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                                            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z">
            </path>
        </svg>
    </div>
    <div class="container py-5 mt-5 mb-3">
        <div class="row justify-content-center py-5 my-4">
            <div class="col-lg-9 col-xl-7 text-center px-lg-4">
                <h2 class="text-color-light font-weight-medium text-11 line-height-5 mb-2 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">High Quality <span
                        class="font-weight-bold custom-highlight-1 ws-nowrap custom-highlight-1-primary p-2 appear-animation"
                        data-appear-animation="customHighlightAnim" data-appear-animation-delay="1s">Computer
                        Services</span> for all type of facilities</h2>
                <p class="custom-font-secondary custom-font-size-1 custom-text-color-1 pb-2 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Our Staff is trained
                    to clean everything you need</p>
                <a href="/-prices.html"
                    class="btn btn-secondary btn-modern font-weight-bold text-3 px-5 btn-py-3 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">VIEW PRICES</a>
            </div>
        </div>
    </div>
    </section>
    --}}

    {{-- Contact Us Section --}}

    <section class="section border-0 bg-transparent pt-4 pt-lg-5 m-0">
        <div class="container pb-5 mb-3">
            <div class="row align-items-end pb-3 mb-4">
                <div class="col-lg-9 col-xl-10 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center pb-1 mb-2">
                        <span class="custom-line appear-animation" data-appear-animation="customLineAnimation"
                            appear-animation-duration="1s"></span>
                        <div class="overflow-hidden ms-3">
                            <h2 class="text-color-primary font-weight-semibold line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskRight" data-appear-animation-delay="1000">OUR BLOG</h2>
                        </div>
                    </div>
                    <h3 class="text-color-secondary font-weight-bold text-transform-none text-8 mb-3 pb-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">News &amp; Articles
                    </h3>
                    <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1400">Our latest news and case studies</p>
                </div>
                <div class="col-lg-auto px-lg-0">
                    <div class="d-flex justify-content-lg-end">
                        <a href="/blog"
                            class="btn btn-secondary btn-modern font-weight-bold text-3 px-5 py-3 appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">VIEW BLOG</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1">
                            <div class="card-body p-3 z-index-1">
                                <a href="/blog">
                                    <img class=" card-img-top border-radius-0 mb-2"
                                        src="{{ asset('public/modules/theme-business/images/common/background-4.jpeg') }}"
                                        alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    <time pubdate="" datetime="2021-01-10">10 Jan 2021</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    3 Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    John Doe
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                            class="text-color-dark text-color-hover-primary text-decoration-none"
                                            href="/-blog-post.html">Launch on 1st August</a></h4>
                                    <p class="card-text mb-2">We're launching on 1st July 2021</p>
                                    <a href="/blog"
                                        class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1">
                            <div class="card-body p-3 z-index-1">
                                <a href="/blog">
                                    <img class="card-img-top border-radius-0 mb-2"
                                        src="{{ asset('public/modules/theme-business/images/common/blog-2.jpg') }}"
                                        alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    <time pubdate="" datetime="2021-01-10">10 Jan 2021</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    3 Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    John Doe
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                            class="text-color-dark text-color-hover-primary text-decoration-none"
                                            href="/blog">Our short story</a></h4>
                                    <p class="card-text mb-2">Let's see Geeks of Sydney's short story at a glance</p>
                                    <a href="/blog"
                                        class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <h3
                                class="text-color-secondary font-weight-bold text-transform-none text-6 mb-3 appear-animation">
                                More Articles</h3>
                            <article class="appear-animation">
                                <div class="card border-0 border-radius-0 bg-transparent">
                                    <div class="card-body bg-transparent p-0">
                                        <p class="text-uppercase text-color-default text-1 pt-1 mb-2">
                                            <time pubdate="" datetime="2021-01-10">10 Jan 2021</time>
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            3 Comments
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            John Doe
                                        </p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                                    class="text-color-dark text-color-hover-primary text-decoration-none"
                                                    href="/-blog-post.html">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
                                            <a href="/-blog-post.html"
                                                class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ
                                                MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <hr>
                        </div>
                        <div class="col-12">
                            <article class="appear-animation">
                                <div class="card border-0 border-radius-0 bg-transparent">
                                    <div class="card-body bg-transparent p-0">
                                        <p class="text-uppercase text-color-default text-1 pt-1 mb-2">
                                            <time pubdate="" datetime="2021-01-10">10 Jan 2021</time>
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            3 Comments
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            John Doe
                                        </p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                                    class="text-color-dark text-color-hover-primary text-decoration-none"
                                                    href="/-blog-post.html">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit. Nunc viverra lorem , consectetur adipiscing elit...</p>
                                            <a href="/-blog-post.html"
                                                class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ
                                                MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection