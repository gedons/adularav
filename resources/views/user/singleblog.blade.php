<!DOCTYPE html>
<html lang="en">

<head>
	<title>Post - Aduvie Events Center</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="aduvieevents.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/main.png')}}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&amp;family=Rubik:wght@400;500;700&amp;family=Spartan:wght@400;700;900&amp;display=swap" rel="stylesheet">

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
<header class="navbar-sticky-bg-dark navbar-sticky">


	<!-- Logo Nav START -->
	<nav class="navbar navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="/">
				<!-- Logo SVG Code -->
				<img src="{{asset('assets/images/main.jpeg')}}" alt="Logo Light" class="navbar-brand-item"
                        style="width: 80px; height: 50px" />
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"> </span>
		  </button>

			<!-- Main Menu START -->
			<div class="collapse navbar-collapse " id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll mx-auto">
					<li class="nav-item">	<a class="nav-link" href="{{ route('user.index') }}">Home</a></li>
					<li class="nav-item">	<a class="nav-link" href="{{ route('user.about') }}">About Us</a></li>
                    <li class="nav-item"> <a class="nav-link"
                        href="{{ route('user.gallery') }}">Gallery</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('user.blog') }}">Blog Posts</a></li>
					<li class="nav-item">	<a class="nav-link" href="{{ route('user.event') }}">Event Calendar</a></li>
					<li class="nav-item">	<a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a></li>
				</ul>
			</div>
			<!-- Main Menu END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">
				<!-- Nav Button -->
				<div class="nav-item d-none d-xl-block">
                    <a href="{{route('user.book')}}" class="btn btn-sm btn-primary mb-0 mx-2">Book Now</a>
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
Inner intro START -->
<section>
	<div class="container">
		<div class="row d-flex justify-content-lg-between">
			<!-- Inner intro title -->
			<div class="col-md-8 mx-auto">
				<!-- Title -->
				<h1 class="display-6">{{$blog->title}}</h1>
				<!-- Post meta -->
				<ul class="list-unstyled list-inline">
					<li class="list-inline-item">By Admin</li>
					<li class="list-inline-item"><i class="fas fa-circle smaller mx-1 fw-bold"></i></li>
					<li class="list-inline-item">{{$blog->created_at->diffForHumans();}}</li>
					<li class="list-inline-item"><i class="fas fa-circle smaller mx-1 fw-bold"></i></li>
					<li class="list-inline-item">8 min read</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Blog START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<img style="height: 400px; width:100%" class="rounded my-4" src="{{$blog->url}}" alt="">
				<p>{{$blog->content}}</p>
			</div>

		</div> <!-- row END -->
	</div>
</section>
<!-- =======================
Blog END -->

<!-- =======================
Tag and Share START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<!-- Share -->
					<div class="list-group-inline list-unstyled">
						<h6 class="mt-2 me-4 d-inline-block">Comments</h6>
					</div>
					<div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://http-aduvieevents-com.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>
			</div> <!-- row END -->
		</div>
	</div>
</section>
<!-- =======================
Tag and Share END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->


    <!-- =======================
Footer START -->
<footer class="bg-dark footer-sticky pt-6">
    <div class="container">
        <div class="row">

            <!-- Footer Widget 1 -->
            <div class="col-md-6 col-lg-4 mb-5">
                <img src="{{asset('assets/images/main.jpeg')}}" alt="Logo Light" class="navbar-brand-item"
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
                                        d="M14.8486 5.65845C13.1442 5.65845 11.7626 7.0401 11.7626 8.74446C11.7626 8.95304 11.7831 9.15581 11.822 9.35119C11.8846 9.66589 11.7924 9.99153 11.5741 10.2267C11.3558 10.4619 11.0379 10.578 10.7194 10.5389C8.51116 10.268 6.50248 9.35556 4.88498 7.9954C4.91649 8.59732 5.12515 9.23671 5.57799 9.90654L6.25677 10.9106L5.14211 11.3863L4.92704 11.4781C5.0869 11.6609 5.2791 11.8487 5.49369 12.0332C5.73717 12.2425 5.97247 12.4165 6.14726 12.5381C6.23408 12.5985 6.30452 12.645 6.35171 12.6755C6.37527 12.6907 6.39294 12.7018 6.40383 12.7086L6.41495 12.7155L6.41519 12.7157L6.41551 12.7159L6.41578 12.7161L6.41619 12.7163L6.41647 12.7165L7.96448 13.655L6.34397 14.4653C6.26374 14.5054 6.18367 14.5412 6.10393 14.573C6.42924 14.8471 6.82517 15.0995 7.2464 15.2986L8.63623 15.9556L7.47226 16.9598C6.8369 17.508 6.19778 17.9166 5.36946 18.1326C6.59681 18.7875 8.00315 19.1596 9.49941 19.1596C14.3045 19.1596 18.1746 15.325 18.1746 10.6256V10.1059L18.5998 9.80721C19.2636 9.34107 19.7329 8.71068 20.0689 7.99004H18.5398H17.9084L17.637 7.41994C17.1401 6.37633 16.0772 5.65845 14.8486 5.65845ZM3.56882 12.9581C3.38031 13.174 3.29093 13.4642 3.33193 13.7553C3.44474 14.5563 3.92441 15.2462 4.45444 15.7728C4.59838 15.9158 4.75232 16.0531 4.91396 16.184C4.88926 16.1909 4.86437 16.1975 4.83925 16.2038C4.35789 16.3243 3.70926 16.3494 2.62755 16.2434C2.20934 16.2024 1.81014 16.4273 1.62841 16.8062C1.44668 17.185 1.5212 17.6371 1.81492 17.9376C3.75693 19.9245 6.48413 21.1596 9.49941 21.1596C15.212 21.1596 19.8978 16.7239 20.1628 11.126C21.4521 10.0429 22.0976 8.57673 22.4458 7.24263C22.5241 6.94292 22.459 6.62387 22.2696 6.37873C22.0803 6.13359 21.788 5.99004 21.4783 5.99004H19.1247C18.2201 4.58853 16.6437 3.65845 14.8486 3.65845C12.1796 3.65845 9.99072 5.71435 9.7793 8.32892C7.91032 7.84456 6.2705 6.78758 5.05863 5.35408C4.83759 5.09261 4.49814 4.9624 4.15894 5.00897C3.81974 5.05554 3.52794 5.27241 3.38555 5.58378C2.78087 6.90597 2.66434 8.43104 3.34116 9.98046L3.10746 10.0802C2.64466 10.2777 2.25073 10.7884 2.5379 11.2725C2.72276 11.925 3.14129 12.5011 3.56882 12.9581Z"
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
            <div class="col-md-6 col-lg-4 mb-5">
                <h5 class="mb-4 text-white">Our office</h5>
                <!-- Address 1 -->
                <p class="text-white mb-2">Abuja, Nigeria (HQ)</p>
                <address class="mb-0">1 Aduvie Close, Off Aduvie Way, Jahi, Jiru</address>
                <p>Call: <a href="#" class="text-body"><u>+234 803 718 5130</u> (Toll-free)</a> </p>

            </div>

            <!-- Footer Widget 4 -->
            <div class="col-md-6 col-lg-4 mb-5">
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
 <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Vendors -->
 <script src="{{asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
 <script src="{{asset('assets/vendor/jarallax/jarallax.min.js')}}"></script>
 <script src="{{asset('assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
 <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

 <!-- Template Functions -->
 <script src="{{asset('assets/js/functions.js')}}"></script>

</body>

</html>
