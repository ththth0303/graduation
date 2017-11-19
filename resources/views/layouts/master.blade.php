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
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Menu CSS -->
    <link href="/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet"><!-- animation CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/bower_components/jquery-loading/dist/jquery.loading.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet"><!-- color CSS you can use different color css from css/colors folder -->
    <link href="/css/colors/blue.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.css" />
    @yield('style')
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
                    <a class="" href="/"><b>Khoa An toàn thông tin</b></a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><img alt="user-img" class="img-circle" src="{{ asset(config('path.avatar').Auth::user()->avatar) }}" width="30px" height="30px"><b class="hidden-xs">{{ Auth::user()->name }}</b></a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <a href="{{ route('user.show', Auth::user()->id) }}"><i class="ti-user"></i> Hồ sơ</a>
                            </li>
                            <li class="divider" role="separator"></li>
                            <li>
                                <a href="#"><i class="ti-settings"></i> Account Đổi mật khẩu</a>
                            </li>
                            <li class="divider" role="separator"></li>
                            <li>
                                <a href="{{ asset('logout') }}"><i class="fa fa-power-off"></i> Đăng xuất</a>
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
                <div id="menu">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a class="waves-effect" href="{{ route('home') }}"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Trang chu</span></a>
                        <li>
                        <li>
                            <a class="waves-effect" href="{{ route('task.index') }}"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Công việc</span></a>
                        <li>
                            <a class="waves-effect" href="{{ route('news.index') }}"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe045;"></i> <span class="hide-menu">Thông báo</span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="{{ route('document.index') }}"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe045;"></i> <span class="hide-menu">Mau van ban</span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="{{ route('student.index') }}"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe045;"></i> <span class="hide-menu">Do an tot nghiep</span></a>
                        </li>
                        @if(Auth::user()->level == config('permission.admin'))
                            <li>
                                <a class="waves-effect" href="{{ route('user.index') }}"><i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe045;"></i> <span class="hide-menu">Giang vien</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
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
    </script>
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}">
    </script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}">
    </script>
    </script>
    <script src="{{asset('bower_components/jquery-loading/dist/jquery.loading.min.js')}}">
    </script>
    <script src="{{asset('bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}">
    </script>
    <script src="{{asset('js/jquery.slimscroll.js')}}">
    </script>
    <script src="{{asset('js/waves.js')}}">
    </script>
    <script src="{{asset('js/custom.min.js')}}">
    </script>
    <script src="{{asset('bower_components/styleswitcher/jQuery.style.switcher.js')}}">
    </script>
    </script> <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment-with-locales.min.js"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    @yield('script')
</body>
</html>
