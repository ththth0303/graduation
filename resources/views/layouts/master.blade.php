<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/horizontal-nav-fullwidth/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2017 07:38:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../plugins/images/favicon.png" rel="icon" sizes="16x16" type="image/png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title><!-- Bootstrap Core CSS -->
    <link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"><!-- Menu CSS -->
    <link href="{{asset('bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet"><!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet"><!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet"><!-- color CSS you can use different color css from css/colors folder -->
    <link href="{{asset('css/colors/blue.css')}}" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg" data-target=".navbar-collapse" data-toggle="collapse" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.html"><b><img alt="home" src="../plugins/images/pixeladmin-logo.png"></b><span class="hidden-xs"><img alt="home" src="../plugins/images/pixeladmin-text.png"></span>Khoa An toàn thông tin</a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a class="open-close hidden-xs waves-effect waves-light" href="javascript:void(0)"><i class="icon-arrow-left-circle ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="app-search hidden-xs" role="search">
                            <input class="form-control" placeholder="Search..." type="text"> <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img alt="user-img" class="img-circle" src="../plugins/images/users/varun.jpg" width="36"><b class="hidden-xs">Steave</b></a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <a href="#"><i class="ti-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="ti-wallet"></i> My Balance</a>
                            </li>
                            <li>
                                <a href="#"><i class="ti-email"></i> Inbox</a>
                            </li>
                            <li class="divider" role="separator"></li>
                            <li>
                                <a href="#"><i class="ti-settings"></i> Account Setting</a>
                            </li>
                            <li class="divider" role="separator"></li>
                            <li>
                                <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul><!-- /.dropdown-user -->
                    </li><!-- .Megamenu -->
                    <!-- /.Megamenu -->
                    <!-- /.dropdown -->
                </ul>
            </div><!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav><!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input class="form-control" placeholder="Search..." type="text"> <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
                        </div><!-- /input-group -->
                    </li>
                    <li>
                        <a class="waves-effect" href="index.html"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="inbox.html"><i class="linea-icon linea-basic fa-fw" data-icon=")"></i> <span class="hide-menu">Apps <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="chat.html">Chat-message</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Inbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="inbox.html">Mail box</a>
                                    </li>
                                    <li>
                                        <a href="inbox-detail.html">Inbox detail</a>
                                    </li>
                                    <li>
                                        <a href="compose.html">Compose mail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Contacts<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="contact.html">Contact1</a>
                                    </li>
                                    <li>
                                        <a href="contact2.html">Contact2</a>
                                    </li>
                                    <li>
                                        <a href="contact-detail.html">Contact Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Charts <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris-chart.html">Morris Chart</a>
                                    </li>
                                    <li>
                                        <a href="chart-js.html">Chart-js</a>
                                    </li>
                                    <li>
                                        <a href="peity-chart.html">Peity Charts</a>
                                    </li>
                                    <li>
                                        <a href="knob-chart.html">Knob Charts</a>
                                    </li>
                                    <li>
                                        <a href="sparkline-chart.html">Sparkline charts</a>
                                    </li>
                                    <li>
                                        <a href="extra-charts.html">Extra Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" href="map-google.html">Google Map</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="map-vector.html">Vector Map</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="calendar.html">Calendar</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Icons <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="fontawesome.html">Font awesome</a>
                                    </li>
                                    <li>
                                        <a href="themifyicon.html">Themify Icons</a>
                                    </li>
                                    <li>
                                        <a href="simple-line.html">Simple line Icons</a>
                                    </li>
                                    <li>
                                        <a href="linea-icon.html">Linea Icons</a>
                                    </li>
                                    <li>
                                        <a href="weather.html">Weather Icons</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="#"><i class="linea-icon linea-basic fa-fw" data-icon="/"></i> <span class="hide-menu">UI kit<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level two-li">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="panel-ui-block.html">Panels With BlockUI</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="sweatalert.html">Sweat alert</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                            <li>
                                <a href="tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="tabs-stylish.html">Stylis Tabs</a>
                            </li>
                            <li>
                                <a href="modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="notification.html">Notifications</a>
                            </li>
                            <li>
                                <a href="carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="list-style.html">List & Media object</a>
                            </li>
                            <li>
                                <a href="user-cards.html">User Cards</a>
                            </li>
                            <li>
                                <a href="timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="timeline-horizontal.html">Horizontal Timeline</a>
                            </li>
                            <li>
                                <a href="nestable.html">Nesteble</a>
                            </li>
                            <li>
                                <a href="range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="bootstrap.html">Bootstrap UI</a>
                            </li>
                            <li>
                                <a href="tooltip-stylish.html">Stylis Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="forms.html"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe00b;"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="form-basic.html">Basic Forms</a>
                            </li>
                            <li>
                                <a href="form-layout.html">Form Layout</a>
                            </li>
                            <li>
                                <a href="form-advanced.html">Form Addons</a>
                            </li>
                            <li>
                                <a href="form-material-elements.html">Form Material</a>
                            </li>
                            <li>
                                <a href="form-float-input.html">Form Float Input</a>
                            </li>
                            <li>
                                <a href="form-upload.html">File Upload</a>
                            </li>
                            <li>
                                <a href="form-mask.html">Form Mask</a>
                            </li>
                            <li>
                                <a href="form-img-cropper.html">Image Cropping</a>
                            </li>
                            <li>
                                <a href="form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="form-dropzone.html">File Dropzone</a>
                            </li>
                            <li>
                                <a href="form-pickers.html">Form-pickers</a>
                            </li>
                            <li>
                                <a href="form-wizard.html">Form-wizards</a>
                            </li>
                            <li>
                                <a href="form-typehead.html">Typehead</a>
                            </li>
                            <li>
                                <a href="form-xeditable.html">X-editable</a>
                            </li>
                            <li>
                                <a href="form-summernote.html">Summernote</a>
                            </li>
                            <li>
                                <a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a>
                            </li>
                            <li>
                                <a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="tables.html"><i class="linea-icon linea-software fa-fw" data-icon="O"></i> <span class="hide-menu">Tables<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="basic-table.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="table-layouts.html">Table Layouts</a>
                            </li>
                            <li>
                                <a href="data-table.html">Data Table</a>
                            </li>
                            <li>
                                <a href="bootstrap-tables.html">Bootstrap Tables</a>
                            </li>
                            <li>
                                <a href="responsive-tables.html">Responsive Tables</a>
                            </li>
                            <li>
                                <a href="editable-tables.html">Editable Tables</a>
                            </li>
                            <li>
                                <a href="foo-tables.html">FooTables</a>
                            </li>
                            <li>
                                <a href="jsgrid.html">JsGrid Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect active" href="#"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe008;"></i> <span class="hide-menu">Extra<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="starter-page.html">Starter Page</a>
                            </li>
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Email Templates<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="https://wrappixel.com/demos/admin-templates/pixeladmin/email-templates/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="https://wrappixel.com/demos/admin-templates/pixeladmin/email-templates/alert.html">Alert</a>
                                    </li>
                                    <li>
                                        <a href="https://wrappixel.com/demos/admin-templates/pixeladmin/email-templates/billing.html">Billing</a>
                                    </li>
                                    <li>
                                        <a href="https://wrappixel.com/demos/admin-templates/pixeladmin/email-templates/password-reset.html">Reset Pwd</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="lightbox.html">Lightbox Popup</a>
                            </li>
                            <li>
                                <a href="treeview.html">Treeview</a>
                            </li>
                            <li>
                                <a href="search-result.html">Search Result</a>
                            </li>
                            <li>
                                <a href="utility-classes.html">Utility Classes</a>
                            </li>
                            <li>
                                <a href="custom-scroll.html">Custom Scrolls</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">User Profile<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                    <li>
                                        <a href="login2.html">Login v2</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="register2.html">Register v2</a>
                                    </li>
                                    <li>
                                        <a href="recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="animation.html">Animations</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Error Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="400.html">Error 400</a>
                                    </li>
                                    <li>
                                        <a href="403.html">Error 403</a>
                                    </li>
                                    <li>
                                        <a href="404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="500.html">Error 500</a>
                                    </li>
                                    <li>
                                        <a href="503.html">Error 503</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="widgets.html"><i class="linea-icon linea-basic fa-fw" data-icon="P"></i> <span class="hide-menu">Widgets</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="javascript:void(0)"><i class="linea-icon linea-software fa-fw" data-icon="F"></i> <span class="hide-menu">Multi level<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="javascript:void(0)">Second Level Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Second Level Item</a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0)">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="javascript:void(0)">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="login.html"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe045;"></i> <span class="hide-menu">Log out</span></a>
                    </li>
                </ul>
            </div>
        </div><!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Starter Page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" href="http://wrappixel.com/templates/pixeladmin/" target="_blank">Buy Now</a>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="active">Starter Page</li>
                        </ol>
                    </div><!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @section('content')
                        @show
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <footer class="footer text-center">
                2017 &copy; Pixel Admin brought to you by wrappixel.com
            </footer>
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script> 
    <script src="bower_components/jquery/dist/jquery.min.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="bootstrap/dist/js/bootstrap.min.js">
    </script> <!-- Menu Plugin JavaScript -->
     
    <script src="bower_components/sidebar-nav/dist/sidebar-nav.min.js">
    </script> <!--slimscroll JavaScript -->
     
    <script src="js/jquery.slimscroll.js">
    </script> <!--Wave Effects -->
     
    <script src="js/waves.js">
    </script> <!-- Custom Theme JavaScript -->
     
    <script src="js/custom.min.js">
    </script> <!--Style Switcher -->
     
    <script src="bower_components/styleswitcher/jQuery.style.switcher.js">
    </script><!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/horizontal-nav-fullwidth/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2017 07:38:36 GMT -->
</body>
</html>