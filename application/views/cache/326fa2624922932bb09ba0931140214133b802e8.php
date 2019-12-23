
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>### ARSIP PEGAWAI ###</title>
  <!-- Favicon-->
  <link rel="icon" href="<?php echo e(site_url("assets/templates/backend2/favicon.ico")); ?>" type="image/x-icon">

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

  <!-- Morris Chart Css-->
  <link href="<?php echo e(site_url('assets/templates/backend2/plugins/morrisjs/morris.css')); ?>" rel="stylesheet" />
  

  <link href="<?php echo e(site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.css')); ?>" rel="stylesheet" />


  <link href="<?php echo e(site_url('assets/plugins/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(site_url('assets/plugins/lightgallery/dist/css/lightgallery.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(site_url('assets/plugins/iziModal/css/iziModal.min.css')); ?>" rel="stylesheet" />
  



  <?php echo $__env->yieldContent('css-import'); ?>

  <!-- Custom Css -->
  <link href="<?php echo e(site_url('assets/templates/backend2/css/style.css')); ?>" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="<?php echo e(site_url('assets/templates/backend2/css/themes/all-themes.css')); ?>" rel="stylesheet" />
  <?php echo $__env->yieldContent('css-inline'); ?>


  <script>
    const SITE_URL = "<?php echo e(site_url()); ?>";
  </script>
</head>

<body class="theme-red">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="<?php echo e(site_url('assets/templates/backend2/index.html')); ?>">SISTEM ARSIP PEGAWAI</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- Call Search -->
          <li><a href="<?php echo e(site_url('auth/do_logout')); ?>" >Logout</a></li>
          <!-- #END# Call Search -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- #Top Bar -->
  <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
        <div class="image">
          <img src="<?php echo e(site_url('assets/templates/backend2/images/user.png')); ?>" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
          <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UNKNOWN</div>
          <div class="email">UNKNOWN</div>
          
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
         <li class="header">MAIN NAVIGATION</li>
         <li class="<?php echo e(hActiveMenu('private')); ?>">
          <a href="<?php echo e(site_url('private')); ?>">
            <i class="material-icons">home</i>
            <span>Home</span>
          </a>
        </li>

        <li class="<?php echo e(hActiveMenu("private\/user.*")); ?>">
          <a href="<?php echo e(site_url('private/user')); ?>">
            <i class="material-icons">text_fields</i>
            <span>Data Pengguna</span>
          </a>
        </li>
        <li class="<?php echo e(hActiveMenu("private\/pegawai.*")); ?>">
          <a href="<?php echo e(site_url('private/pegawai')); ?>">
            <i class="material-icons">text_fields</i>
            <span>Data Pegawai</span>
          </a>
        </li>

        
      </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->

    <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->
  <!-- Right Sidebar -->
  
  <!-- #END# Right Sidebar -->
</section>

<section class="content">
  <?php echo $__env->yieldContent('content'); ?>
</section>

<!-- Jquery Core Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

<!-- Select Plugin Js -->


<!-- Slimscroll Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/node-waves/waves.js')); ?>"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-countto/jquery.countTo.js')); ?>"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/morrisjs/morris.js')); ?>"></script>

<!-- ChartJs -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/chartjs/Chart.bundle.js')); ?>"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/plugins/jquery-sparkline/jquery.sparkline.js')); ?>"></script>

<script src="<?php echo e(site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/plugins/dropzone/min/dropzone.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/plugins/lightgallery/dist/js/lightgallery.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/plugins/lightgallery/demo/js/lg-zoom.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/plugins/lightgallery/demo/js/lg-fullscreen.min.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/plugins/iziModal/js/iziModal.min.js')); ?>"></script>


<?php echo $__env->yieldContent('js-import'); ?>

<script src="<?php echo e(site_url('assets/js/custom.js')); ?>"></script>

<!-- Custom Js -->
<script src="<?php echo e(site_url('assets/templates/backend2/js/admin.js')); ?>"></script>
<script src="<?php echo e(site_url('assets/templates/backend2/js/pages/index.js')); ?>"></script>

<?php echo $__env->yieldContent('js-inline'); ?>
<style>

    .swal2-container {
      z-index: 20000;
    }
  </style>
</body>

</html>
<?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/layouts/backend2.blade.php ENDPATH**/ ?>