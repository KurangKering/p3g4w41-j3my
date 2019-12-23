
<!doctype html>
<html class="fixed has-top-menu">
<head>

	<meta charset="UTF-8">

	<title>Sistem Arsip Pegawai</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap/css/bootstrap.css') }}" />

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/font-awesome/css/font-awesome.css') }}" />

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

	<link href="{{ site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />

	<link href="{{ site_url('assets/plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />

	<link href="{{ site_url('assets/plugins/lightgallery/dist/css/lightgallery.min.css') }}" rel="stylesheet" />



	@yield('css-import')

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/theme.css') }}" />

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/skins/default.css') }}" />

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/theme-custom.css') }}">

	@yield('css-inline')
	<style>

		@media only screen and (min-width: 768px) {
			.header.header-nav-menu .logo {
				margin-top: 15px;
			}

			.header.header-nav-menu .logo:after {
				top: -19px;
			}
		}
		
	</style>


	<script src="{{ site_url('assets/templates/backend3/assets/vendor/modernizr/modernizr.js') }}"></script>

	<script>
		const SITE_URL = "{{ site_url() }}";
	</script>
</head>
<body>
	<section class="body">

		<header class="header header-nav-menu">
			<div class="logo-container">
				<a href="{{ site_url() }}" class="logo">
					<span 
					style="
					font-size: 20px; 
					"
					>Sistem Arsip Pegawai</span>
				</a>
				<button class="btn header-btn-collapse-nav hidden-md hidden-lg" data-toggle="collapse" data-target=".header-nav">
					<i class="fa fa-bars"></i>
				</button>

				<div class="header-nav collapse">
					<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
						<nav>
							<ul class="nav nav-pills" id="mainNav">
								<li class="{{ hActiveMenu('') }}">
									<a href="{{ site_url('') }}">
										Dashboard
									</a>    
								</li>
								<li class="{{ hActiveMenu("private\/pegawai.*") }}">
									<a href="{{ site_url('private/pegawai') }}">
										Data Pegawai
									</a>    
								</li>
								<li class="{{ hActiveMenu("private\/user.*") }}">
									<a href="{{ site_url('private/user') }}">
										Data Pengguna
									</a>    
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="header-right">
				<span class="separator"></span>


				<ul id="userbox" class="userbox">
					<a  href="{{ site_url('auth/do_logout') }}"><i class="fa fa-power-off"></i> Logout</a>

						
				</ul>
				<span class="separator"></span>

			</div>
		</header>

		<div class="inner-wrapper">
			<section role="main" class="content-body">
				<header class="page-header">
					<h2>@yield('page-title', 'Default Page Title')</h2>
				</header>


				@yield('content')
			</section>

		</div>
	</section>

	<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>


	<script src="{{ site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
	<script src="{{ site_url('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
	<script src="{{ site_url('assets/plugins/lightgallery/dist/js/lightgallery.min.js') }}"></script>
	<script src="{{ site_url('assets/plugins/lightgallery/demo/js/lg-zoom.min.js') }}"></script>
	<script src="{{ site_url('assets/plugins/lightgallery/demo/js/lg-fullscreen.min.js') }}"></script>


	@yield('js-import')

	<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.js') }}"></script>

	<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.custom.js') }}"></script>

	<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.init.js') }}"></script>
	<script src="{{ site_url('assets/js/custom.js') }}"></script>

	@yield('js-inline')
	<style>

		.swal2-container {
			z-index: 20000;
		}
	</style>
</body>
</html>