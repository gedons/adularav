<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Aduvie Events Center</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="aduvieevents.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/main.png">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&amp;family=Rubik:wght@400;500;700&amp;family=Spartan:wght@400;700;900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


</head>

<body>

    <!-- =======================
Header START -->
    <header class="navbar-transparent navbar-sticky-bg-dark navbar-sticky">

        <!-- Navbar top START -->
        <div class="navbar-top d-none d-lg-block">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Navbar top Left-->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- Top info -->
                        <ul class="nav justify-content-center justify-content-md-start">
                            <li class="nav-item me-3" data-bs-toggle="tooltip" data-bs-animation="false"
                                data-bs-placement="bottom" title="Sunday CLOSED">
                                <span class="text-white"><i class="far fa-clock me-2"></i>Visit time: Mon-Sat
                                    9:00-6:00</span>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-link text-white text-primary-hover" href="#"><i
                                        class="fas fa-headset me-2"></i>Call us now: +234 803 718 5130</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Navbar top Right-->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- Language -->
                        <div class="dropdown ms-3">
                            <a class="text-white text-primary-hover" href="#" aria-expanded="false"> <img
                                    class="fa-fw me-2" src="assets/images/flags/uk.svg" alt=""> English </a>
                        </div>

                        <!-- Top link -->
                        <ul class="nav ms-3">
                            <li class="nav-item">
                                <a href="{{ route('user.contact') }}"
                                    class="nav-link text-white text-primary-hover">Contact</a>
                            </li>
                        </ul>

                        <!-- Top social -->
                        <ul class="list-unstyled d-flex">
                            <li> <a class="text-white text-primary-hover px-2"
                                    href="https://www.facebook.com/aduvieschool?mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a> </li>
                            <li> <a class="text-white text-primary-hover px-2"
                                    href="https://www.instagram.com/aduvieeventscentre?igsh=MXQxa214Y3phNmt4dQ=="><i
                                        class="fab fa-instagram"></i></a> </li>
                            <li> <a class="text-white text-primary-hover ps-2" href="https://x.com/aduvieschool?s=20"><i
                                        class="fab fa-twitter"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-light opacity-1"></div>
        <!-- Navbar top END -->

        <!-- Logo Nav START -->
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo SVG Code -->

                    <img src="assets/images/main.jpeg" alt="Logo Light" class="navbar-brand-item"
                        style="width: 80px; height: 50px" />
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <!-- Main Menu START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll mx-auto">
                        <li class="nav-item"> <a class="nav-link active" href="{{ route('user.index') }}">Home</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('user.about') }}">About Us</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('user.testimonial') }}">Testimonial</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('user.event') }}">Event
                                Calendar</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- Main Menu END -->

                <!-- Nav right START -->
                <div class="nav flex-nowrap align-items-center">
                    <!-- Nav Button -->
                    <div class="nav-item d-none d-xl-block">
                        <a href="#" class="btn btn-sm btn-primary mb-0 mx-2">Get Started</a>
                    </div>
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Banner START -->
        <section class="position-relative bg-dark p-0">
            <!-- Social sites link left -->
            <div class="position-absolute top-50 start-0 translate-middle z-index-9 ms-4 d-none d-xxl-block">
                <div class="list-group-inline list-unstyled rotate-270">
                    <a href="#" class="list-group-item text-white bg-transparent mt-4">Facebook</a>
                    <a href="#" class="list-group-item text-white bg-transparent mt-4">Twitter</a>
                    <a href="#" class="list-group-item text-white bg-transparent mt-4">Dribble</a>
                </div>
            </div>

            <!-- Scoll Down -->
            <div class="scroll-down scroll-down-light m-5 d-none d-md-block">
                <div class="scroll-line"></div>
                <span class="scoll-text">Scroll Down</span>
            </div>

            <!-- Banner START -->
            <div
                class="tiny-slider dots-white dots-bordered dots-end arrow-bordered arrow-large arrow-round arrow-start-bottom arrow-md-none">
                <div class="tiny-slider-inner h-500 h-sm-700 h-xl-900" data-autoplay="true" data-autoplaytime="7000"
                    data-gutter="0" data-arrow="true" data-dots="true" data-items="1">

                    <!-- Slide 1 START -->
                    <div class="h-100 bg-dark-overlay-4 bg-dark"
                        style="background-image:url(assets/images/IMG20211022180926.jpg); background-position: center center; background-size: cover;">
                        <div class="container h-100">
                            <div class="row d-flex h-100">
                                <div class="col-md-8 justify-content-center align-self-center align-items-start">
                                    <div class="slider-content text-start">
                                        <h5
                                            class="animate__animated animate__fadeInUp animate__delay-1s text-white mb-1 mb-md-4 mt-md-0 mt-7">
                                            Let us raise a glass to your next
                                            special occasion</h5>
                                        <h2
                                            class="display-1 text-white-stroke text-primary-shadow d-block animate__animated animate__fadeInUp animate__delay-2s">
                                            Concerts</h2>
                                        <!-- <p class="animate__animated animate__fadeInUp animate__delay-3s lead text-white">We're digital creative agency. We help our customers better manage their web presence in order to achieve greater success online.</p> -->
                                        <div class="animate__animated animate__fadeInUp mt-4 animate__delay-4s"><a
                                                href="#" class="btn btn-primary">Get Started</a>
                                            <div class="float-md-end mt-md-2 -mt-7 mb-3">
                                                <a class="btn btn-primary btn-lg btn-round btn-ripple me-2 align-middle d-inline-block"
                                                    data-glightbox data-gallery="office-tour"
                                                    href="https://youtu.be/vvdkK07niqk"> <i
                                                        class="fas fa-play"></i></a>
                                                <div class="align-middle d-inline-block">
                                                    <h5 class="mb-0 text-white">take a tour</h5>
                                                    <p class="mb-0 text-secondary">In 03:11 min</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Slide 1 END -->

                    <!-- Slide 2 START -->
                    <div class="h-100 bg-dark-overlay-4 bg-dark"
                        style="background-image:url(assets/images/IMG20211022180926.jpg); background-position: center center; background-size: cover;">
                        <div class="container h-100">
                            <div class="row d-flex h-100">
                                <div class="col-md-8 justify-content-center align-self-center align-items-start">
                                    <div class="slider-content text-start">
                                        <h5
                                            class="animate__animated animate__fadeInUp animate__delay-1s text-white mb-1 mb-md-4 mt-md-0 mt-7">
                                            Birthdays, Concerts and Weddings</h5>
                                        <h2
                                            class="display-1 text-white-stroke text-primary-shadow d-block animate__animated animate__fadeInUp animate__delay-2s">
                                            Conferences</h2>
                                        <!-- <p class="animate__animated animate__fadeInUp animate__delay-3s lead text-white">We're digital creative agency. We help our customers better manage their web presence in order to achieve greater success online.</p> -->
                                        <div class="animate__animated animate__fadeInUp mt-4 animate__delay-4s"><a
                                                href="#" class="btn btn-primary">Get Started</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Slide 2 END -->

                    <!-- Slide 3 START -->
                    <div class="h-100 bg-dark-overlay-4 bg-dark"
                        style="background-image:url(assets/images/IMG20211023130241.jpg); background-position: center center; background-size: cover;">
                        <div class="container h-100">
                            <div class="row d-flex h-100">
                                <div class="col-md-8 justify-content-center align-self-center align-items-start">
                                    <div class="slider-content text-start">
                                        <h5
                                            class="animate__animated animate__fadeInUp animate__delay-1s text-white mb-1 mb-md-4 mt-md-0 mt-7">
                                            memories are made and shared with love</h5>
                                        <h2
                                            class="display-1 text-white-stroke text-primary-shadow d-block animate__animated animate__fadeInUp animate__delay-2s">
                                            Exibitions</h2>
                                        <!-- <p class="animate__animated animate__fadeInUp animate__delay-3s lead text-white">We're digital creative agency. We help our customers better manage their web presence in order to achieve greater success online.</p> -->
                                        <div class="animate__animated animate__fadeInUp mt-4 animate__delay-4s"><a
                                                href="#" class="btn btn-primary">Get Started</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Slide 3 END -->

                </div>
            </div>
        </section>
        <!-- =======================
Main Banner END -->


        <!-- =======================
video START -->
        <!-- <section class="p-0">
 <div class="container">
  <div class="row">
   <div class="col-sm-8 mb-3 mx-auto text-center pt-7">
    <h2 class="display-5 mb-5 text-dark-stroke">Lets Take A Tour</h2>
   </div>
   <div class="col-12 mb-30">
    <video controls autoplay>
     <source src="assets/images/VID.mp4" type="video/mp4">
     Your browser does not support the video
    </video>
   </div>
  </div>
 </div>
</section> -->
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-md-between">
                    <div class="col-12">
                        <div class="col-sm-8 mb-3 mx-auto text-center pt-7">
                            <h2 class="display-5 mb-5 text-dark-stroke">Lets Take A Tour</h2>
                        </div>
                        <div class="bg-parallax bg-dark-overlay-2 rounded overflow-hidden py-9"
                            style="background:url(assets/images/vidt.jpg) no-repeat center center; background-size:cover;">
                            <div class="position-absolute top-50 start-50 translate-middle py-9">
                                <a class="zoom-hover d-block" data-glightbox data-gallery="video-4"
                                    href="https://youtu.be/vvdkK07niqk">
                                    <img class="rotate-infinite" src="assets/images/play-video-light.svg"
                                        alt="play video">
                                    <span class="position-absolute top-50 start-50 translate-middle"><i
                                            class="bi bi-play text-white display-6"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
video END -->



        <!-- =======================
tour1 START -->
        <section class="pt-4">
            <div class="container">
                <!-- Title -->
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-sm-8 mb-3">
                        <!-- <h2 class="display-5 mb-0 mb-sm-4 text-dark-stroke">Upcoming Events</h2> -->
                    </div>
                </div>
                <!-- Portfolio items -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tiny-slider dots-bordered">
                            <div class="tiny-slider-inner" data-arrow="true" data-dots="true" data-items-xl="3"
                                data-items-lg="3" data-items-md="3" data-items-sm="2" data-items-xs="1">

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240319-WA0021.jpg" class="card card-metro"
                                        data-glightbox data-gallery="gallery-1">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240319-WA0025.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/01.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">The missing link in e-Mobility</h5>
                                                <p class="small text-white mb-0 text-truncate">What hasn’t been a great
                                                    fit in e-mobility until now.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240319-WA0024.jpg" data-glightbox data-gallery="gallery-2" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240319-WA0024.jpg"  alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/02.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Trumer brewed happiness</h5>
                                                <p class="small text-white mb-0 text-truncate">Private brewery for
                                                    excellent beer</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240319-WA0031.jpg"  data-glightbox data-gallery="gallery-3" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240319-WA0031.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/03.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Enticing like the ocean</h5>
                                                <p class="small text-white mb-0 text-truncate">Viktoria Louise is the
                                                    blossoming fashion label of Vicky Heiler</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240319-WA0033.jpg" data-glightbox data-gallery="gallery-4" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240319-WA0033.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/04.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Pure design branding</h5>
                                                <p class="small text-white mb-0 text-truncate">Art collector and
                                                    architect Axel</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240320-WA0020.jpg" data-glightbox data-gallery="gallery-5" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240320-WA0020.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/05.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">The missing link</h5>
                                                <p class="small text-white mb-0 text-truncate">Small things that make
                                                    difference</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->


                                <!-- Card item START -->
                                <div class="item">
                                    <a href="assets/images/IMG-20240320-WA0016.jpg" data-glightbox data-gallery="gallery-6" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/IMG-20240320-WA0016.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/07.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Life's hard in the mountains</h5>
                                                <p class="small text-white mb-0 text-truncate">Ten wineries with strong
                                                    personalities, individual stories and multi-faceted wines</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                            </div>
                        </div>
                    </div>
                </div><!-- row END -->
            </div>
        </section>
        <!-- =======================
tour1 END -->

        <!-- =======================
tour2 START -->
        <section class="position-relative p-0 mb-0 mb-md-5">
            <!-- Banner START -->
            <div class="tiny-slider dots-inside dots-bordered">
                <div class="tiny-slider-inner pb-5 pb-lg-7" data-autoplay="true" data-autoplaytime="7000"
                    data-gutter="0" data-arrow="false" data-dots="true" data-items="1">
                    <!-- Slide 1 START -->
                    <div class="item bg-white h-500 h-md-800 overflow-hidden">
                        <!-- Dark bg with pattern overlay -->
                        <div class="bg-dark h-400 h-md-600 position-absolute top-0 start-0 end-0 pattern-overlay-5">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content z-index-9 position-relative pt-7 pt-lg-9">
                                        <!-- Slider Info -->
                                        <div class="row justify-content-between mb-3 mb-md-5">
                                            <div class="col-md-8 animate__animated animate__fadeInUp">
                                                <h2 class="d-block text-white display-6">Décor <span
                                                        class="text-primary-stroke text-stroke-md">and </span>Design.
                                                </h2>
                                            </div>
                                            <div class="col-md-4 animate__animated animate__fadeInUp">
                                                <p class="lead text-white d-none d-md-block">Transform our event spaces
                                                    into your dream setting with our expert décor and design services.
                                                </p>
                                                <a href="#" class="btn btn-line text-white mt-0 mt-md-4">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                        <!-- Slider Image -->
                                        <div
                                            class="bg-dark position-relative overflow-hidden animate__animated animate__fadeInUp">
                                            <!-- Shape Decoration -->
                                            <figure
                                                class="position-absolute end-0 top-0 mt-n3 me-n9 d-none d-lg-block">
                                                <svg width="390" height="304" viewBox="0 0 218 170"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-primary"
                                                        d="m143.6 25.1c-5.9-5.6-10.9-12.2-17.8-16.5-13.7-8.6-33.5-5.4-43.8 7-3.9 4.6-6.4 10.2-9.5 15.4-8.4 14-21.1 25-29.9 38.7s-13 32.7-3.4 45.9c9.7 13.4 28.8 15.4 41.7 25.6 6.3 5.1 10.9 12.1 16.9 17.6 19 17.3 52.5 14.6 68.6-5.4 9.9-12.4 13.4-29.3 24.8-40.4 4-3.9 8.9-6.9 12.8-10.9 5.1-5.2 8.4-12 10.8-19 3.1-9.3 4.7-19.6 1.4-28.8-5.7-16-18.7-15.9-32.5-14.4-15 1.8-29.4-4.6-40.1-14.8z" />
                                                    <path class="svg-custom-border-white"
                                                        d="m17.8 72.7c3.9-3.3 8.1-6.2 12.6-8.8" />
                                                    <path class="svg-custom-border-white"
                                                        d="m18 86.5c4.1-2.9 8.5-5.5 13-7.8" />
                                                    <path class="svg-custom-border-white"
                                                        d="m33.3 93c4.6-2.3 9-5.1 13.1-8.3" />
                                                    <path class="svg-custom-border-white"
                                                        d="m47.6 66.8c3.9-1.8 7.6-4.1 10.9-6.8" />
                                                    <path class="svg-custom-border-white"
                                                        d="m73.7 55.5c3-1.6 5.9-3.2 8.9-4.8" />
                                                    <path class="svg-custom-border-white"
                                                        d="m67.7 69.1c3.4-2.5 7-4.6 10.8-6.4" />
                                                    <path class="svg-custom-border-white"
                                                        d="m64.8 80.5c4.5-2.2 8.9-4.8 13.1-7.7" />
                                                    <path class="svg-custom-border-white"
                                                        d="m71.4 93.6c3.8-1.6 7.4-3.6 10.7-5.9" />
                                                    <path class="svg-custom-border-white"
                                                        d="m70.2 121.5c3.6-2.1 7.2-4.3 10.8-6.4" />
                                                    <path class="svg-custom-border-white"
                                                        d="m54.2 119.2c3.4-2.4 6.7-4.7 10.1-7.1" />
                                                    <path class="svg-custom-border-white"
                                                        d="m36.9 114.9c3.4-2.3 6.8-4.7 10.2-7" />
                                                    <path class="svg-custom-border-white"
                                                        d="m51.1 99.5c2.4-2.7 5.3-5.1 8.4-7" />
                                                    <path class="svg-custom-border-white"
                                                        d="m7.7 121.4c4-2.6 7.9-5.1 11.9-7.7" />
                                                    <path class="svg-custom-border-white"
                                                        d="m17.8 132.7c2.6-1.8 5.2-3.5 7.8-5.3" />
                                                    <path class="svg-custom-border-white"
                                                        d="m21.4 154.1c4.4-3 8.9-6.1 13.3-9.1" />
                                                    <path class="svg-custom-border-white"
                                                        d="m48.8 140.6c2.6-1.9 5.2-3.9 7.8-5.8" />
                                                    <path class="svg-custom-border-white"
                                                        d="m44 158.9c3.1-1.1 6-2.9 8.5-5.1" />
                                                    <path class="svg-custom-border-white"
                                                        d="m67.8 146.5c4.5-2.4 8.8-5.4 12.5-8.9" />
                                                    <path class="svg-custom-border-white"
                                                        d="m73.4 156.1c2.4-1 4.6-2.4 6.6-4.1" />
                                                    <path class="svg-custom-border-white"
                                                        d="m83.3 98.9c2.6-1.8 5.1-3.6 7.7-5.4" />
                                                </svg>
                                            </figure>
                                            <!-- Image -->
                                            <img src="assets/images/IMG20211104154639.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 END -->
                    <!-- Slide 2 START -->
                    <div class="item bg-white h-500 h-md-800 overflow-hidden">
                        <!-- Dark bg with pattern overlay -->
                        <div class="bg-dark h-400 h-md-600 position-absolute top-0 start-0 end-0 pattern-overlay-5">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content z-index-9 position-relative pt-7 pt-lg-9">
                                        <!-- Slider Info -->
                                        <div class="row justify-content-between mb-3 mb-md-5">
                                            <div class="col-md-8 animate__animated animate__fadeInUp">
                                                <h2 class="text-white display-6"><span class="bg-primary p-2">Vendor
                                                    </span><br> Coordination</h2>
                                            </div>
                                            <div class="col-md-4 animate__animated animate__fadeInUp">
                                                <p class="lead text-white d-none d-md-block">Planning an event often
                                                    requires the involvement of various vendors, from florists to
                                                    photographers.</p>
                                                <a href="#" class="btn btn-line text-white mt-0 mt-md-4">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                        <!-- Slider Image -->
                                        <div
                                            class="bg-dark position-relative overflow-hidden animate__animated animate__fadeInUp">
                                            <!-- Shape Decoration -->
                                            <div
                                                class="position-absolute end-0 bottom-0 zoom-2 d-none d-lg-block z-index-9">
                                                <div class="bg-primary-overlay-dotted p-7 rotate-10"></div>
                                            </div>
                                            <!-- Image -->
                                            <img src="assets/images/IMG20211104154544.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 END -->
                </div>

                <!-- Social links and arrow START -->
                <div class="container mt-n5 d-none d-md-block">
                    <div class="row justify-content-between position-relative align-items-center">
                        <!-- Social sites link -->
                        <div class="col-md-6">
                            <div class="d-flex mt-n2">
                                <a class="btn btn-primary btn-round btn-ripple me-2 align-middle d-inline-block"
                                    data-glightbox data-gallery="office-tour" href="https://youtu.be/n_Cn8eFo7u8"> <i
                                        class="fas fa-play"></i></a>
                                <div class="align-middle d-inline-block">
                                    <h6 class="mb-0 text-dark">Office tour</h6>
                                    <p class="mb-0 text-secondary">In 02:11 min</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Social links and arrow END -->


            </div>
            <!-- Banner START -->
        </section>
        <!-- =======================
tour2 END -->

        <!-- =======================
event START -->
        <section class="pt-4">
            <div class="container">
                <!-- Title -->
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-sm-8 mb-3">
                        <h2 class="display-5 mb-0 mb-sm-4 text-dark-stroke">Upcoming Events</h2>
                    </div>
                    <div class="col-sm-4 mb-4 text-start text-sm-end">
                        <a href="#" class="btn btn-line text-dark mt-3">View our work</a>
                    </div>
                </div>
                <!-- Portfolio items -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tiny-slider dots-bordered">
                            <div class="tiny-slider-inner" data-arrow="false" data-dots="true" data-items-xl="3"
                                data-items-lg="3" data-items-md="3" data-items-sm="2" data-items-xs="1">

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/01.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/01.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">The missing link in e-Mobility</h5>
                                                <p class="small text-white mb-0 text-truncate">What hasn’t been a great
                                                    fit in e-mobility until now.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/02.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/02.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Trumer brewed happiness</h5>
                                                <p class="small text-white mb-0 text-truncate">Private brewery for
                                                    excellent beer</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" data-glightbox class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/03.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/03.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Enticing like the ocean</h5>
                                                <p class="small text-white mb-0 text-truncate">Viktoria Louise is the
                                                    blossoming fashion label of Vicky Heiler</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/04.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/04.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Pure design branding</h5>
                                                <p class="small text-white mb-0 text-truncate">Art collector and
                                                    architect Axel</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/05.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/05.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">The missing link</h5>
                                                <p class="small text-white mb-0 text-truncate">Small things that make
                                                    difference</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/06.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/06.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">The blossoming fashion label </h5>
                                                <p class="small text-white mb-0 text-truncate">These were the
                                                    attributes that moodley had to convey.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                                <!-- Card item START -->
                                <div class="item">
                                    <a href="#" class="card card-metro">
                                        <!-- Card Image -->
                                        <div class="card-image">
                                            <img src="assets/images/portfolio/07.jpg" alt="card image">
                                        </div>
                                        <!-- Card Overlay -->
                                        <div class="card-img-overlay d-flex flex-column">
                                            <img class="w-40" src="assets/images/clients/light/07.svg"
                                                alt="">
                                            <div class="mt-auto card-text">
                                                <h5 class="text-white">Life's hard in the mountains</h5>
                                                <p class="small text-white mb-0 text-truncate">Ten wineries with strong
                                                    personalities, individual stories and multi-faceted wines</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- Card item END -->

                            </div>
                        </div>
                    </div>
                </div><!-- row END -->
            </div>
        </section>
        <!-- =======================
event END -->


        <!-- =======================
Blog START -->
        <section class="pt-0">
            <div class="container">
                <!-- Title -->
                <div class="row d-flex justify-content-between align-items-center mt-5">
                    <div class="col-sm-8 mb-3">
                        <h2 class="display-5 mb-0 mb-sm-4 text-dark-stroke">Blog Posts</h2>
                    </div>
                    <div class="col-sm-4 mb-4 text-start text-sm-end">
                        <a href="#" class="btn btn-line text-dark mt-3">View our work</a>
                    </div>
                </div>
                <div class="row">
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 mb-30">
                        <div class="card card-metro">
                            <!-- Card Image -->
                            <div class="card-image">
                                <img src="assets/images/blog/01.jpg" alt="card image">
                            </div>
                            <!-- Card Overlay -->
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto card-text">
                                    <!-- Featured label-->
                                    <span class="featured-label" title="Featured Blog"><i
                                            class="fas fa-star"></i></span>

                                    <div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
                                        <!-- Card Categories -->
                                        <div class="text-primary-hover">
                                            <a href="#" class="text-white me-2">Business</a>
                                        </div>
                                        <!-- Divider -->
                                        <i class="fas fa-circle smaller me-2 fw-bold"></i>
                                        <!-- Min of read -->
                                        <span>5 min read</span>
                                    </div>

                                    <h4><a href="#" class="text-white text-primary-hover">Reliable sources to
                                            learn about folio</a></h4>
                                    <p class="text-white text-truncate">He moonlights difficult engrossed it,
                                        sportsmen. Interested has all Devonshire difficulty gay assistance joy</p>
                                    <a href="#" class="btn btn-line text-white mb-0">Read Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 mb-30">
                        <div class="card card-metro">
                            <!-- Card Image -->
                            <div class="card-image">
                                <img src="assets/images/blog/02.jpg" alt="card image">
                            </div>
                            <!-- Card Overlay -->
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto card-text">
                                    <div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
                                        <!-- Card Categories -->
                                        <div class="text-primary-hover">
                                            <a href="#" class="text-white me-2">Start-up</a>
                                        </div>
                                        <!-- Divider -->
                                        <i class="fas fa-circle smaller me-2 fw-bold"></i>
                                        <!-- Min of read -->
                                        <span>3 min read</span>
                                    </div>
                                    <h4><a href="#" class="text-white text-primary-hover">Never underestimate
                                            the influence of folio</a></h4>
                                    <p class="text-white text-truncate">See resolved goodness felicity shy civility
                                        domestic had but. Drawings offended yet answered Jennings</p>
                                    <a href="#" class="btn btn-line text-white mb-0">Read Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 mb-30">
                        <div class="card card-metro">
                            <!-- Card Image -->
                            <div class="card-image">
                                <img src="assets/images/blog/03.jpg" alt="card image">
                            </div>
                            <!-- Card Overlay -->
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto card-text">
                                    <div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
                                        <!-- Card Categories -->
                                        <div class="text-primary-hover">
                                            <a href="#" class="text-white me-2">Story</a>
                                        </div>
                                        <!-- Divider -->
                                        <i class="fas fa-circle smaller me-2 fw-bold"></i>
                                        <!-- Min of read -->
                                        <span>6 min read</span>
                                    </div>
                                    <h4><a href="#" class="text-white text-primary-hover">Skills that you can
                                            learn from business</a></h4>
                                    <p class="text-white text-truncate">Rooms oh fully taken by worse do. Points afraid
                                        but may end law lasted. Was out laughter raptures</p>
                                    <a href="#" class="btn btn-line text-white mb-0">Read Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                </div><!-- row END -->

                <!-- Load more START -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-light">Load more! <i
                                    class="fas fa-sync ms-3 text-primary"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Load more END -->
            </div>
        </section>
        <!-- =======================
Blog END -->

        <!-- =======================
Action box START -->
        <section class="pt-0 position-relative">
            <!-- Shape Decoration START -->
            <figure class="position-absolute start-0 bottom-0 ms-n6 mb-n4 z-index-9 d-none d-lg-block">
                <svg width="285" height="82" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 82">
                    <rect class="fill-primary" x="22.67" y="16.58" width="262.22" height="65.42" />
                    <path
                        d="m9.63 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0.01-4.82-2.15-4.82-4.81s2.16-4.81 4.81-4.81c2.66 0 4.82 2.15 4.82 4.81z" />
                    <path
                        d="m35.25 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m60.88 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z" />
                    <path
                        d="m86.5 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z" />
                    <path
                        d="m112.12 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m137.75 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z" />
                    <path
                        d="m163.37 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m188.99 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m214.62 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z" />
                    <path
                        d="m240.24 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m9.63 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0.01-4.82-2.15-4.82-4.81s2.16-4.81 4.81-4.81c2.66 0 4.82 2.16 4.82 4.81z" />
                    <path
                        d="m35.25 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.16 4.81 4.81z" />
                    <path
                        d="m60.88 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z" />
                    <path
                        d="m86.5 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z" />
                    <path
                        d="m112.12 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.16 4.81 4.81z" />
                    <path
                        d="m137.75 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z" />
                    <circle cx="158.56" cy="30.38" r="4.81" />
                    <circle cx="184.18" cy="30.38" r="4.81" />
                    <circle cx="209.8" cy="30.38" r="4.81" />
                    <circle cx="235.43" cy="30.38" r="4.81" />
                    <path
                        d="m9.63 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.82-2.16-4.82-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.82 2.15 4.82 4.81z" />
                    <path
                        d="m35.25 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m60.88 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m86.5 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m112.12 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.81 2.15 4.81 4.81z" />
                    <path
                        d="m137.75 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z" />
                    <circle cx="158.56" cy="55.94" r="4.81" />
                    <circle cx="184.18" cy="55.94" r="4.81" />
                    <circle cx="209.8" cy="55.94" r="4.81" />
                    <circle cx="235.43" cy="55.94" r="4.81" />
                </svg>
            </figure>
            <!-- Shape Decoration END -->
            <div class="container">
                <div class="row g-0 d-flex align-items-center">
                    <!-- Our Work Block -->
                    <div class="col-sm-6">
                        <div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-6 h-100">
                            <h2 class="mb-3 display-6"><a class="text-white-stroke" href="#">Events</a></h2>
                            <a class="btn btn-line text-white mb-0" href="{{ route('user.event') }}">View Events</a>
                            <img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9"
                                src="assets/images/vie.jpg" alt="">
                        </div>
                    </div>
                    <!-- Project Block -->
                    <div class="col-sm-6">
                        <div class="text-center bg-dark px-3 py-6 h-100">
                            <h2 class="mb-3 display-6 text-white">Have an Event?</h2>
                            <a class="btn btn-line text-white mb-0" href="{{ route('user.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div><!-- row END -->
            </div>
        </section>
        <!-- =======================
Action box END -->

        <!-- =======================
Action box START -->
        <section>
            <div class="container">
                <div class="row justify-content-md-between align-items-center border p-4">
                    <!-- About Title -->
                    <div class="col-md-8 col-lg-9">
                        <h4 class="mb-0">Find out more about our services or book an event.</h4>
                    </div>
                    <div class="col-md-4 col-lg-3 text-md-end mt-4 mt-md-0">
                        <a href="#" class="btn btn-lg btn-line btn-primary mb-0">Contact Us</a>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Action box END -->

        <!-- =======================
Cookie START -->
        <section>
            <div class="container">
                <div class="row justify-content-md-between">
                    <div class="alert alert-dismissible fade show bg-dark text-white position-fixed start-0 bottom-0 z-index-9 shadow rounded-0 p-4 ms-3 mb-3 col-9 col-md-3"
                        role="alert">
                        <h5 class="text-white">Cookies alert in position fixed</h5>
                        This website stores cookies on your computer. To find out more about the cookies we use, see our
                        <a class="text-white" href="#"> Privacy Policy</a>
                        <div class="mt-4">
                            <button type="button" class="btn btn-link btn-sm text-white mb-0 ps-0"
                                data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">Accept</span>
                            </button>
                            <button type="button" class="btn btn-link btn-sm text-danger mb-0"
                                data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">Decline</span>
                            </button>
                        </div>
                        <div class="position-absolute end-0 top-0 mt-n4 me-n4"><img class="w-100"
                                src="assets/images/cookie.svg" alt="cookie"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Cookie START -->


    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark footer-sticky pt-6">
        <div class="container">
            <div class="row">

                <!-- Footer Widget 1 -->
                <div class="col-md-6 col-lg-3 mb-5">
                    <img src="assets/images/main.jpeg" alt="Logo Light" class="navbar-brand-item"
                        style="width: 80px; height: 50px" />
                    <p>Aduvie Event Center, where every moment is an occasion to remember!</p>
                    <div class="d-flex me-auto">
                        <h6 class="mt-2 me-4 text-white">Follow :</h6>
                        <div class="list-group-inline list-unstyled text-primary-hover">
                            <a href="https://www.instagram.com/aduvieeventscentre?igsh=MXQxa214Y3phNmt4dQ=="
                                class="list-group-item text-white bg-transparent">
                                <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                            fill="#ffffff"></path>
                                        <path
                                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                            fill="#ffffff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg></a>
                            <a href="https://x.com/aduvieschool?s=20"
                                class="list-group-item text-white bg-transparent"><svg width="19px" height="19px"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.8486 5.65845C13.1442 5.65845 11.7626 7.0401 11.7626 8.74446C11.7626 8.95304 11.7831 9.15581 11.822 9.35119C11.8846 9.66589 11.7924 9.99153 11.5741 10.2267C11.3558 10.4619 11.0379 10.578 10.7194 10.5389C8.51116 10.268 6.50248 9.35556 4.88498 7.9954C4.91649 8.59732 5.12515 9.23671 5.57799 9.90654L6.25677 10.9106L5.14211 11.3863L4.92704 11.4781C5.0869 11.6609 5.2791 11.8487 5.49369 12.0332C5.73717 12.2425 5.97247 12.4165 6.14726 12.5381C6.23408 12.5985 6.30452 12.645 6.35171 12.6755C6.37527 12.6907 6.39294 12.7018 6.40383 12.7086L6.41495 12.7155L6.41519 12.7157L6.41551 12.7159L6.41578 12.7161L6.41619 12.7163L6.41647 12.7165L7.96448 13.655L6.34397 14.4653C6.26374 14.5054 6.18367 14.5412 6.10393 14.573C6.42924 14.8471 6.82517 15.0995 7.2464 15.2986L8.63623 15.9556L7.47226 16.9598C6.8369 17.508 6.19778 17.9166 5.36946 18.1326C6.59681 18.7875 8.00315 19.1596 9.49941 19.1596C14.3045 19.1596 18.1746 15.325 18.1746 10.6256V10.1059L18.5998 9.80721C19.2636 9.34107 19.7329 8.71068 20.0689 7.99004H18.5398H17.9084L17.637 7.41994C17.1401 6.37633 16.0772 5.65845 14.8486 5.65845ZM3.56882 12.9581C3.38031 13.174 3.29093 13.4642 3.33193 13.7553C3.44474 14.5563 3.92441 15.2462 4.45444 15.7728C4.59838 15.9158 4.75232 16.0531 4.91396 16.184C4.88926 16.1909 4.86437 16.1975 4.83925 16.2038C4.35789 16.3243 3.70926 16.3494 2.62755 16.2434C2.20934 16.2024 1.81014 16.4273 1.62841 16.8062C1.44668 17.185 1.5212 17.6371 1.81492 17.9376C3.75693 19.9245 6.48413 21.1596 9.49941 21.1596C15.212 21.1596 19.8978 16.7239 20.1628 11.126C21.4521 10.0429 22.0976 8.57673 22.4458 7.24263C22.5241 6.94292 22.459 6.62387 22.2696 6.37873C22.0803 6.13359 21.788 5.99004 21.4783 5.99004H19.1247C18.2201 4.58853 16.6437 3.65845 14.8486 3.65845C12.1796 3.65845 9.99072 5.71435 9.7793 8.32892C7.91032 7.84456 6.2705 6.78758 5.05863 5.35408C4.83759 5.09261 4.49814 4.9624 4.15894 5.00897C3.81974 5.05554 3.52794 5.27241 3.38555 5.58378C2.78087 6.90597 2.66434 8.43104 3.34116 9.98046L3.10746 10.0802C2.64466 10.2777 2.40073 10.7884 2.5379 11.2725C2.72276 11.925 3.14129 12.5011 3.56882 12.9581Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg></a>
                            <a href="https://www.facebook.com/aduvieschool?mibextid=ZbWKwL"
                                class="list-group-item text-white bg-transparent"><svg width="19px" height="19px"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget 2 -->
                <div class="col-md-6 col-lg-3 mb-5">
                    <h5 class="mb-4 text-white">Our office</h5>
                    <!-- Address 1 -->
                    <p class="text-white mb-2">Abuja, Nigeria (HQ)</p>
                    <address class="mb-0">1 Aduvie Close, Off Aduvie Way, Jahi, Jiru</address>
                    <p>Call: <a href="#" class="text-body"><u>+234 803 718 5130</u> (Toll-free)</a> </p>

                </div>

                <!-- Footer Widget 3 -->
                <div class="col-md-6 col-lg-3 mb-5">
                    <h5 class="mb-4 text-white">Useful links</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}">Home</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link active"
                                        href="{{ route('user.about') }}">About Us</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('user.testimonial') }}">Testimonial</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('user.event') }}">Event
                                        Calendar</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('user.contact') }}">Contact
                                        Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Footer Widget 4 -->
                <div class="col-md-6 col-lg-3 mb-5">
                    <h5 class="mb-4 text-white">Stay in touch</h5>
                    <form>
                        <label class="form-label">Have questions about hosting your events?</label>
                        <div class="mb-3">
                            <a href="{{ route('user.contact') }}" class="btn btn-primary mb-0">Contact Us</a>
                        </div>
                    </form>
                </div>

            </div>
            <!-- Divider -->
            <div class="divider-light opacity-1"></div>

            <!-- Footer copyright START -->
            <div class="row align-items-center justify-content-md-between py-4">
                <div class="col-md-6">
                    <div class="text-center text-md-start">©2024 <a href="https://www.aduveevents.com/"
                            target="_blank">Aduvie Events Center</a>. All rights reserved
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item"><a class="nav-link text-body text-primary-hover"
                                href="#">Terms</a></li>
                        <li class="nav-item"><a class="nav-link text-body text-primary-hover"
                                href="#">Privacy</a></li>
                        <li class="nav-item"><a class="nav-link text-body text-primary-hover pe-0"
                                href="#">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer copyright END -->
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Custom cursor -->
    <div class="cursor-dot-outline"></div>
    <div class="cursor-dot"></div>

    <!-- Back to top -->
    <div class="back-top">
        <div class="scroll-line"></div>
        <span class="scoll-text">Go Up</span>
    </div>

    <!-- =======================
JS libraries, plugins and custom scripts -->

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/jarallax/jarallax.min.js"></script>
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>
