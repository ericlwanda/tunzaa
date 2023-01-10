
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title></title>
  <!-- Favicon icon -->

  <!-- Custom CSS -->
  <link href="/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/libs/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="/libs/jquery-minicolors/jquery.minicolors.css" />
  <link rel="stylesheet" type="text/css" href="/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="/libs/quill/dist/quill.snow.css" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
</head>

<body>

  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->

            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text ms-2">
              <!-- dark Logo text -->
              {{-- <img src="/images/logo-icon.png'" alt="homepage" class="light-logo" /> --}}
            </span>

          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>


          </ul>

          <ul class="navbar-nav float-end">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <p>{{Auth::user()->name}}</p>
              </a>
            
            </li>
           
            <li class="nav-item dropdown">
              
              <a class="nav-link dropdown-toggle  text-muted waves-effect waves-dark  pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout" ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                <div class="dropdown-divider"></div>
                
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('products') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Products</span></a>
                   </li>
                  
              
              
                

                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full
                                Width</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms
                            </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons
                            </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome
                                        Icons </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors
                            </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                    </span></a>
                            </li>
                        </ul>
                    </li>  -->

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
        @yield('content')

        <footer class="footer text-center">

                Designed and Developed by <a href="">@Erick lwanda</a>.
            
            </footer>
            
            <script src="/libs/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <script src="/extra-libs/sparkline/sparkline.js')}}"></script>
            <!--Wave Effects -->
            <script src="/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="/js/custom.min.js"></script>
            
            
            <script src="/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
            <script src="/js/pages/mask/mask.init.js"></script>
            <script src="/libs/select2/dist/js/select2.full.min.js"></script>
            <script src="/libs/select2/dist/js/select2.min.js"></script>
            <script src="/libs/flot/excanvas.js"></script>
            <script src="/libs/flot/jquery.flot.js"></script>
            <script src="/libs/flot/jquery.flot.pie.js"></script>
            <script src="/libs/flot/jquery.flot.time.js"></script>
            <script src="/libs/flot/jquery.flot.stack.js"></script>
            <script src="/libs/flot/jquery.flot.crosshair.js"></script>
            <script src="/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
            <script src="/js/pages/chart/chart-page-init.js"></script>
            <script src="/extra-libs/multicheck/datatable-checkbox-init.js"></script>
            <script src="/extra-libs/multicheck/jquery.multicheck.js"></script>
            <script src="/extra-libs/DataTables/datatables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script>
                /****************************************
                 *       Basic Table                   *
                 ****************************************/
                $(".select2").select2();
                $("#zero_config").DataTable();
            
                jQuery(".mydatepicker").datepicker();
                jQuery("#datepicker-autoclose").datepicker({
                    autoclose: true
                    , todayHighlight: true
                , });
            
            </script>
            </body>
            
            </html>
              

      