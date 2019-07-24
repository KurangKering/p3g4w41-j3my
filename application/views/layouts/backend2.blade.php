
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ site_url("assets/templates/backend2/favicon.ico") }}" type="image/x-icon">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> --}}
    
    <style>
        /* roboto-regular - latin_cyrillic-ext */
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.eot") }}); /* IE9 Compat Modes */
          src: local('Roboto'), local('Roboto-Regular'),
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.eot?#iefix") }}) format('embedded-opentype'), /* IE6-IE8 */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.woff2") }}) format('woff2'), /* Super Modern Browsers */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.woff") }}) format('woff'), /* Modern Browsers */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.ttf") }}) format('truetype'), /* Safari, Android, iOS */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-regular.svg#Roboto") }}) format('svg'); /* Legacy iOS */
      }
      /* roboto-700 - latin_cyrillic-ext */
      @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.eot") }}); /* IE9 Compat Modes */
          src: local('Roboto Bold'), local('Roboto-Bold'),
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.eot?#iefix") }}) format('embedded-opentype'), /* IE6-IE8 */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.woff2") }}) format('woff2'), /* Super Modern Browsers */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.woff") }}) format('woff'), /* Modern Browsers */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.ttf") }}) format('truetype'), /* Safari, Android, iOS */
          url({{ site_url("assets/templates/backend2/fonts/roboto-v19-latin_cyrillic-ext-700.svg#Roboto") }}) format('svg'); /* Legacy iOS */
      }

      /* fallback */
      @font-face {
          font-family: 'Material Icons';
          font-style: normal;
          font-weight: 400;
          src: url({{ site_url('assets/templates/backend2/iconfont/MaterialIcons-Regular.woff2') }}) format('woff2');
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
  <link href="{{ site_url('assets/templates/backend2/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Waves Effect Css -->
  <link href="{{ site_url('assets/templates/backend2/plugins/node-waves/waves.css') }}" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="{{ site_url('assets/templates/backend2/plugins/animate-css/animate.css') }}" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="{{ site_url('assets/templates/backend2/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
  <link href="{{ site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />


  <link href="{{ site_url('assets/plugins/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />



  @yield('css-import')

  <!-- Custom Css -->
  <link href="{{ site_url('assets/templates/backend2/css/style.css') }}" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="{{ site_url('assets/templates/backend2/css/themes/all-themes.css') }}" rel="stylesheet" />
  @yield('css-inline')


  <script>
    const SITE_URL = "{{ site_url() }}";
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
                <a class="navbar-brand" href="{{ site_url('assets/templates/backend2/index.html') }}">SISTEM ARSIP PEGAWAI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" >Logout</a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
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
                    <img src="{{ site_url('assets/templates/backend2/images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                   <li class="header">MAIN NAVIGATION</li>
                   <li class="active">
                    <a href="{{ site_url('assets/templates/backend2/index.html') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ site_url('private/user') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Data Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="{{ site_url('private/pegawai') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Data Pegawai</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/cards/basic.html') }}">Basic</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/cards/colored.html') }}">Colored</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/cards/no-header.html') }}">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/infobox/infobox-1.html') }}">Infobox-1</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/infobox/infobox-2.html') }}">Infobox-2</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/infobox/infobox-3.html') }}">Infobox-3</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/infobox/infobox-4.html') }}">Infobox-4</a>
                                </li>
                                <li>
                                    <a href="{{ site_url('assets/templates/backend2/pages/widgets/infobox/infobox-5.html') }}">Infobox-5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->

        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="{{ site_url('assets/templates/backend2/#skins') }}" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="{{ site_url('assets/templates/backend2/#settings') }}" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    @yield('content')
</section>

<!-- Jquery Core Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ site_url('assets/templates/backend2/plugins/chartjs/Chart.bundle.js') }}"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="{{ site_url('assets/templates/backend2/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>


@yield('js-import')

<script src="{{ site_url('assets/js/custom.js') }}"></script>

<!-- Custom Js -->
<script src="{{ site_url('assets/templates/backend2/js/admin.js') }}"></script>
<script src="{{ site_url('assets/templates/backend2/js/pages/index.js') }}"></script>


<script src="{{ site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ site_url('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>



<!-- Demo Js -->

@yield('js-inline')

</body>

</html>
