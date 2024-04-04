<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin - Aduvie Events Center</title>
    <link rel="shortcut icon" href="../../assets/images/main.png">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="../../adminAssets/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../../adminAssets/assets/css/ready.css">
	<link rel="stylesheet" href="../../adminAssets/assets/css/demo.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">           
				<a href="{{ url('/') }}" class="logo">
					Admin Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
		 
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					 
					 
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="../../adminAssets/assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="../../adminAssets/assets/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="../../adminAssets/assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Welcome
									<span class="user-level">{{ Auth::user()->name }}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="{{ route('home') }}">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>								 
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{ route('events') }}">
								<i class="la la-table"></i>
								<p>Events</p>								
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('bookings') }}">
								<i class="la la-keyboard-o"></i>
								<p>User Bookings</p>								
							</a>
						</li>
						<li class="nav-item active">
							<a href="{{ route('blogs') }}">
								<i class="la la-jsfiddle"></i>
								<p>Blog</p>								
							</a>
						</li>	
						<li class="nav-item">
							<a class="#" data-toggle="collapse" href="#collapsefExample" aria-expanded="true">
								<span>							
								<i class="la la-th"></i>		 
									<span class="user-level">Pages</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapsefExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="{{ route('sliders') }}">
											<span class="link-collapse">Slider</span>
										</a>
									</li>
									<li>
										<a href="{{ route('gallery') }}">
											<span class="link-collapse">Gallery</span>
										</a>
									</li>
									<li>
										<a href="{{ route('contact') }}">
											<span class="link-collapse">Contact</span>
										</a>
									</li>
								</ul>
							</div>

						</li>										
						<li class="nav-item">
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="la la-fast-backward"></i>	
                                <p>Logout</p>															
							</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
						</li>						 
					</ul>
				</div>
			</div>
            <div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Blog Posts</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Add New Post</div>
									</div>
                                    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Post Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" id="title" required autocomplete="title" autofocus placeholder="Enter Post Title">
                                                <small id="nameHelp" class="form-text text-muted">The title of the blog post.</small>
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>                                                                                      
                                    
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Post Image</label>
                                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="exampleFormControlFile1">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                                <div class="form-group">
                                                    <label for="comment">Content</label>
                                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="comment" rows="5">
                                                      
                                                    </textarea>
                                                    @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>										 
                                            </div>
                                            <div class="card-action">
                                                <button type="submit" class="btn btn-primary">Create Post</button>											 
                                            </div>
                                        </div>
                                    </form>
								</div>								
							</div>
						</div>
					</div>
					<footer class="footer">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.aduvieevents.com">
                                            Aduvie Events Center
                                        </a>
                                    </li>								
                                </ul>
                            </nav>
                            <div class="copyright ml-auto">
                                2024, made with <i class="la la-heart heart text-danger"></i> by <a href="https://www.gedonidev.vercel.app">NTech</a>
                            </div>				
                        </div>
                    </footer>
			</div>
		</div>
	</div>
	 
</body>
<script src="../../adminAssets/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../adminAssets/assets/js/core/popper.min.js"></script>
<script src="../../adminAssets/assets/js/core/bootstrap.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../adminAssets/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../adminAssets/assets/js/ready.min.js"></script>
<script src="../../adminAssets/assets/js/demo.js"></script>
</html>