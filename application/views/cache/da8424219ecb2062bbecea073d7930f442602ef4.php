
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>## LOGIN AREA ##</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo e(site_url('assets/templates/backend2/favicon.ico')); ?>" type="image/x-icon">

	<!-- Google Fonts -->
	<style>
		/* roboto-regular - latin_cyrillic-ext */
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 400;
			src: url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.eot")); ?>); /* IE9 Compat Modes */
			src: local('Roboto'), local('Roboto-Regular'),
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.eot?#iefix")); ?>) format('embedded-opentype'), /* IE6-IE8 */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.woff2")); ?>) format('woff2'), /* Super Modern Browsers */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.woff")); ?>) format('woff'), /* Modern Browsers */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.ttf")); ?>) format('truetype'), /* Safari, Android, iOS */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.svg#Roboto")); ?>) format('svg'); /* Legacy iOS */
		}
		/* roboto-700 - latin_cyrillic-ext */
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 700;
			src: url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.eot")); ?>); /* IE9 Compat Modes */
			src: local('Roboto Bold'), local('Roboto-Bold'),
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.eot?#iefix")); ?>) format('embedded-opentype'), /* IE6-IE8 */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.woff2")); ?>) format('woff2'), /* Super Modern Browsers */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.woff")); ?>) format('woff'), /* Modern Browsers */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.ttf")); ?>) format('truetype'), /* Safari, Android, iOS */
			url(<?php echo e(site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.svg#Roboto")); ?>) format('svg'); /* Legacy iOS */
		}

		/* fallback */
		@font-face {
			font-family: 'Material Icons';
			font-style: normal;
			font-weight: 400;
			src: url(<?php echo e(site_url('assets/templates/backend2/iconfont/MaterialIcons-Regular.woff2')); ?>) format('woff2');
		}

		.material-icons {
			font-family: 'Material Icons';
			font-weight: normal;
			font-style: normal;
			font-size: 24px;
			line-height: 1;
			letter-spacing: normal;
			text-transform: none;
			display: inline-block;
			white-space: nowrap;
			word-wrap: normal;
			direction: ltr;
			-webkit-font-feature-settings: 'liga';
			-webkit-font-smoothing: antialiased;
		}
	</style>

	<!-- Bootstrap Core Css -->
	<link href="<?php echo e(site_url('assets/templates/backend2/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo e(site_url('assets/templates/backend2/plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo e(site_url('assets/templates/backend2/plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo e(site_url('assets/templates/backend2/css/style.css')); ?>" rel="stylesheet">
	<script>
		const SITE_URL = "<?php echo e(site_url()); ?>";
	</script>
</head>

<body class="login-page">
	<div class="login-box">
		<div class="logo">
			<a href="javascript:void(0);"><b>SAP</b></a>
			<small>SISTEM ARSIP PEGAWAI</small>
		</div>
		<div class="card">
			<div class="body">
				<div id="error-message">
				</div>
				<form id="sign_in" method="POST">
					
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">person</i>
						</span>
						<div class="form-line">
							<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8 p-t-5"></div>
						<div class="col-xs-4">
							<button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery/jquery.min.js')); ?>"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo e(site_url('assets/templates/backend2/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo e(site_url('assets/templates/backend2/plugins/node-waves/waves.js')); ?>"></script>

	<!-- Validation Plugin Js -->
	<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-validation/jquery.validate.js')); ?>"></script>

	<!-- Custom Js -->
	<script src="<?php echo e(site_url('assets/templates/backend2/js/admin.js')); ?>"></script>


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
						`<div class=\"alert alert-warning text-center\">
						<span class=\"text-center\">AKUN TIDAK DITEMUKAN</span>
						</div>
						`);
				} else {

					$("#error-message").html(
						`<div class=\"alert alert-success text-center\">
						<span class=\"text-center\">BERHASIL LOGIN</span>
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

</html><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/login.blade.php ENDPATH**/ ?>