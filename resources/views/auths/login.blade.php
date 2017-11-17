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
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
  <div class="login-box">
    <div class="white-box">
      <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="post">
        {!! csrf_field() !!}
        <h3 class="box-title m-b-20">Sign In</h3>
        @if (session('status'))
            <div class="text-danger">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                  <input id="checkbox-signup" type="checkbox" name="remember" value="1">
                  <label for="checkbox-signup"> Remember me </label>
                </div>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="https://wrappixel.com/demos/admin-templates/pixeladmin/horizontal-nav-fullwidth/index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment-with-locales.min.js"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
</body>
</html>
