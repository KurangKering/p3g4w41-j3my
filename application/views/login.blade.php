
<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap/css/bootstrap.css') }}" />

	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/theme.css') }}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/skins/default.css') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ site_url('assets/templates/backend3/assets/stylesheets/theme-custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ site_url('assets/templates/backend3/assets/vendor/modernizr/modernizr.js') }}"></script>

	<script>
		const SITE_URL = "{{ site_url() }}";
	</script>
	<title>Login area Sistem Arsip Pegawai</title>

	<style>
		.login-page { margin: 0; padding: 0; position: relative; background: #264869;}
		.login-wrapper { width: 100%; position: relative; }
		.login-drop img { min-width: 100%; min-height: 100%; }
		.login-drop { z-index: 90 !important; position: absolute; height: 320px !important; overflow: hidden; background: #fff; width: 100%}
		.top-brand { color: #0088cc; font-size: 0.9em; line-height: 1.2em; }
		.top-brand span { font-size: 1.3em; color: #444 }

		.login-box-ex { margin: 1% auto 0 auto; }

		.logo-brand { text-align: center; margin: 0 0 10px 0 }
		.logo-brand p a { color: #fff; }

		.fit-logo img { width: 85px;}
		.login-box-body { border: 1px solid #d3e1ed; padding: 5px 20px}
		.login-logo { letter-spacing: -1px; font-size: 4.0em; line-height: 23px; color: #fff;  margin: 0 0 10px 0; padding: 15px 0 5px 0;}
		.login-logo small { font-size: 0.3em; letter-spacing: 0}
		.login-instansi {
			letter-spacing: -1px;
			text-align: center;
			font-size: 1.8em;
			line-height: 1.1em;
			color: #fff;
			margin: 0;
			padding: 10px 0 5px 0;
			} /*background: url('../images/drop.png'); */
			.clear { clear: both }
			.hide { display: none; }



		</style>
	</head>
	<body>
		<!-- start: page -->

		<section class="body-sign">
			<div class="center-sign">
				<div class="login-instansi"></div>

				<div class="panel panel-sign">
					{{-- <div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div> --}}


					<div class="panel-body" style="">

						<div id="error-message">
							<div class="alert alert-info">

								Login Sistem Arsip Pegawai 
								<br>
							</div>
						</div>
						<form id="sign_in" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input required name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									{{-- <a href="pages-recover-password.html" class="pull-right">Lost Password?</a> --}}
								</div>
								<div class="input-group input-group-icon">
									<input required name="password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">

								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>






						</form>
					</div>
				</div>

			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ site_url('assets/templates/backend3/assets/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ site_url('assets/templates/backend3/assets/javascripts/theme.init.js') }}"></script>
		<script>
			$("#sign_in").submit(function(e) {
				e.preventDefault();

				let formData = $(this).serializeArray();

				$.ajax({
					url: SITE_URL + 'auth/do_login',
					type: 'POST',
					dataType: 'json',
					data: formData,
				})
				.done(function(resp) {
					$('#error-message').html("");

					if (resp.status == 'error') 
					{
						$("#error-message").html(
							`<div class=\"alert alert-warning \">
							<span class=\"\">Akun Tidak Ditemukan</span>
							</div>
							`);
					} else {

						$("#error-message").html(
							`<div class=\"alert alert-success \">
							<span class=\"\">Berhasil Login</span>
							</div>
							`);
						$("button[type='submit']").attr('disabled', true);
						setTimeout(function() {
							location.href = SITE_URL + 'private';
						}, 1000);
					}
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});

			})

			function afterLogin (doSomething, timer) {
				return new Promise(function(resolve, reject) {
					setTimeout(function() {
						doSomething();
						resolve('done');
					}, timer);
				});
			};
		</script>
	</body>
	</html>