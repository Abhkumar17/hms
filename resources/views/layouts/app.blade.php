<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Patient  | Dashboard</title>
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
      <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
      <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
      <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
      <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
      <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
      <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/css/plugins.css">
      <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
   </head>
   <body>
      <div id="app">
         <div class="sidebar app-aside" id="sidebar">
            <div class="sidebar-container perfect-scrollbar">
               <nav>
                  <!-- start: MAIN NAVIGATION MENU -->
                  <div class="navbar-title">
                     <span>Main Navigation</span>
                  </div>
                  <ul class="main-navigation-menu">
                     <li>
                        <a href="dashboard">
                           <div class="item-content">
                              <div class="item-media">
                                 <i class="ti-home"></i>
                              </div>
                              <div class="item-inner">
                                 <span class="title"> Dashboard </span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="book-appointment">
                           <div class="item-content">
                              <div class="item-media">
                                 <i class="ti-pencil-alt"></i>
                              </div>
                              <div class="item-inner">
                                 <span class="title"> Book Appointment </span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="appointment-history">
                           <div class="item-content">
                              <div class="item-media">
                                 <i class="ti-list"></i>
                              </div>
                              <div class="item-inner">
                                 <span class="title"> Appointment History </span>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="manage-medhistory">
                           <div class="item-content">
                              <div class="item-media">
                                 <i class="ti-list"></i>
                              </div>
                              <div class="item-inner">
                                 <span class="title"> Medical History </span>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
                  <!-- end: CORE FEATURES -->
               </nav>
            </div>
         </div>
         <div class="app-content">
                <!-- include|Header -->
            <header class="navbar navbar-default navbar-static-top">
               <!-- start: NAVBAR HEADER -->
               <div class="navbar-header">
                  <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                  <i class="ti-align-justify"></i>
                  </a>
                  <a class="navbar-brand" href="#">
                     <h2 style="padding-top:20% ">HMS</h2>
                  </a>
                  <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                  <i class="ti-align-justify"></i>
                  </a>
                  <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="ti-view-grid"></i>
                  </a>
               </div>
               <!-- end: NAVBAR HEADER -->
               <!-- start: NAVBAR COLLAPSE -->
               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-right">
                     <!-- start: MESSAGES DROPDOWN -->
                     <li  style="padding-top:2% ">
                        <h2>HMS</h2>
                     </li>
                     <li class="dropdown current-user">
                        <a href class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/images.jpg"> <span class="username">
                        <i class="ti-angle-down"></i></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-dark">
                           <li>
                              <a href="edit-profile">
                              My Profile
                              </a>
                           </li>
                           <li>
                              <a href="change-password">
                              Change Password
                              </a>
                           </li>
                           <li>
                              <a href="logout" id="logout-button">
                              Log Out
                              </a>
                              <!-- <button id="logout-button" style="border:none;">Logout</button> -->
                           </li>
                        </ul>
                     </li>
                     <!-- end: USER OPTIONS DROPDOWN -->
                  </ul>
                  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
                  <script>
                    $(document).ready(function(){
                    $("#logout-button").click(function(){
                    $.ajax({
                        type: 'GET',
                        url: '/logout',
                        success: function(response) {
                            // Handle the response
                            console.log(response.message);
                            // Redirect the user to the appropriate page
                            window.location.href = '/user-login';
                        }
                    });
                });
            });

                  </script>
                  <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                  <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                     <div class="arrow-left"></div>
                     <div class="arrow-right"></div>
                  </div>
                  <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
               </div>
               <!-- end: NAVBAR COLLAPSE -->
            </header>
            <!-- end: TOP NAVBAR -->
                   @yield('content')     
         </div>
         <!-- start: FOOTER -->
         
         <footer>
            <div class="footer-inner">
               <div class="pull-left">
                  &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>Developed by Xenottabyte serviece pvt.ltd.</span>
               </div>
               <div class="pull-right">
                  <span class="go-top"><i class="ti-angle-up"></i></span>
               </div>
            </div>
         </footer>
         <!-- end: FOOTER -->
         <!-- start: SETTINGS -->
    
         <div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
            <button ct-toggle="toggle" data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
            <i class="fa fa-spin fa-gear"></i>
            </button>
            <div class="panel-heading">
               Style Selector
            </div>
            <div class="panel-body">
               <!-- start: FIXED HEADER -->
               <div class="setting-box clearfix">
                  <span class="setting-title pull-left"> Fixed header</span>
                  <span class="setting-switch pull-right">
                  <input type="checkbox" class="js-switch" id="fixed-header" />
                  </span>
               </div>
               <!-- end: FIXED HEADER -->
               <!-- start: FIXED SIDEBAR -->
               <div class="setting-box clearfix">
                  <span class="setting-title pull-left">Fixed sidebar</span>
                  <span class="setting-switch pull-right">
                  <input type="checkbox" class="js-switch" id="fixed-sidebar" />
                  </span>
               </div>
               <!-- end: FIXED SIDEBAR -->
               <!-- start: CLOSED SIDEBAR -->
               <div class="setting-box clearfix">
                  <span class="setting-title pull-left">Closed sidebar</span>
                  <span class="setting-switch pull-right">
                  <input type="checkbox" class="js-switch" id="closed-sidebar" />
                  </span>
               </div>
               <!-- end: CLOSED SIDEBAR -->
               <!-- start: FIXED FOOTER -->
               <div class="setting-box clearfix">
                  <span class="setting-title pull-left">Fixed footer</span>
                  <span class="setting-switch pull-right">
                  <input type="checkbox" class="js-switch" id="fixed-footer" />
                  </span>
               </div>
               <!-- end: FIXED FOOTER -->
               <!-- start: THEME SWITCHER -->
               <div class="colors-row setting-box">
                  <div class="color-theme theme-1">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-1">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
                  <div class="color-theme theme-2">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-2">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
               </div>
               <div class="colors-row setting-box">
                  <div class="color-theme theme-3">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-3">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
                  <div class="color-theme theme-4">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-4">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
               </div>
               <div class="colors-row setting-box">
                  <div class="color-theme theme-5">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-5">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
                  <div class="color-theme theme-6">
                     <div class="color-layout">
                        <label>
                        <input type="radio" name="setting-theme" value="theme-6">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                        </label>
                     </div>
                  </div>
               </div>
               <!-- end: THEME SWITCHER -->
            </div>
         </div>
         <>
         <!-- end: SETTINGS -->
      </div>
      <!-- start: MAIN JAVASCRIPTS -->
      
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="vendor/modernizr/modernizr.js"></script>
      <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
      <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="vendor/switchery/switchery.min.js"></script>
      <!-- end: MAIN JAVASCRIPTS -->
      <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
      <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
      <script src="vendor/autosize/autosize.min.js"></script>
      <script src="vendor/selectFx/classie.js"></script>
      <script src="vendor/selectFx/selectFx.js"></script>
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
      <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <!-- start: CLIP-TWO JAVASCRIPTS -->
      <script src="assets/js/main.js"></script>
      <!-- start: JavaScript Event Handlers for this page -->
      <script src="assets/js/form-elements.js"></script>
      <script>
         jQuery(document).ready(function() {
         	Main.init();
         	FormElements.init();
         });
      </script>
      <!-- end: JavaScript Event Handlers for this page -->
      <!-- end: CLIP-TWO JAVASCRIPTS -->
   </body>
</html>