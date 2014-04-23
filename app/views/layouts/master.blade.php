<!doctype html>
<html lang="en">
<head>
    <title>Jaime Velasco</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100, 700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <link href="/assets/css/scrolling-nav.css" rel="stylesheet" type="text/css">

@yield('topscript')
<style type="text/css">
    

a{
    color: #fff;
}

</style>

</head>
	    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                  
                </button>
                <a class="navbar-brand" href="/">Jaime Velasco</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{{ action('HomeController@showContact') }}}">Contact</a>
                    </li>
                  <!--   <li class="page-scroll">
                        <a href="{{{ action('PostController@index') }}}">Blog</a>
                    </li> -->
                    @if (Auth::check())
                    <li class="page-scroll">
                        <a href="{{{ action('HomeController@showLogin') }}}"><span class="label label-warning" >Logout&nbsp;{{ Auth::user()->email1 }}</span></a>
                    </li>
                    @else

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 200px;">


                            {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
                        <center><h2 class="form-signin-heading">Sign in</h2></center>
                            {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus'))}}
                        <br>
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required'))}}
                        <br>
                        <center>{{ Form::submit('Login',  array('class' => 'btn btn-lg btn-primary')) }}</center>
                            {{ Form::close() }}
                          


                           <!--  
                            {{ Form::open(array('action' => 'HomeController@showLogin', 'form-signin')) }}
                            <br>  
                            {{ Form::text('email', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required')) }}
                            <br>
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
                            <br>
                            <center>{{ Form::submit('Login',  array('class' => 'btn btn-sm btn-info')) }}</center>
                            {{ Form::close() }}
                            <br> -->
                                           
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<body id="page-top">


    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            @if (Session::has('successMessage'))
                <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{{ Session::get('errorMessage') }}}</div>
            @endif
            @if (Session::has('loginFail'))
                <div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{{ Session::get('loginFail') }}}</div>
            @endif
        </div>
    </div>
    
@yield('content')




    <script src="/assets/js/jquery-1.11.0.js"></script>    
    <script src="/assets/js/bootstrap.min.js"></script>    
    <script src="/assets/js/scrolling-nav.js"></script>

    @yield('bottomscript')
    <script>
        $('.alert').fadeIn();
        setTimeout(function() {
        $('.alert').fadeOut();
        }, 2000);
    </script>


</body>
</html>