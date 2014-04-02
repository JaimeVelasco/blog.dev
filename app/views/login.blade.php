@extends('layouts.master')



@section('topscript')


<style type="text/css">
body {

	  padding-top: 70px;
	  padding-bottom: 40px;
	  
}

loginContainer{
	background-color: #eee;

}

.form-signin {
	  max-width: 330px;
	  padding: 15px;
	  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
	  margin-bottom: 10px;
	  text-align: center;
}
.form-signin .checkbox {
	  font-weight: normal;
}
.form-signin .form-control {
	  position: relative;
	  height: auto;
	  -webkit-box-sizing: border-box;
	     -moz-box-sizing: border-box;
	          box-sizing: border-box;
	  padding: 10px;
	  font-size: 16px;
}
.form-signin .form-control:focus {
	  z-index: 2;
}
.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
}
</style>


<title>Please Login</title>


@stop


@section('content')

<div class="loginContainer">
	<div class="blog-post">
		{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <!-- <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus> -->
	       {{ Form::email( '', null, array('class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus'))}}
	       {{ $errors->first('email', '<p><span class="help-block">:message</span><p>') }}
	       {{ Form::password( null, array('class' => 'form-control', 'placeholder' => 'Password', 'required'))}}
		   {{ $errors->first('password', '<p><span class="help-block">:message</span><p>') }}
        <p>{{ Form::checkbox('remember', 'Remember-me', true, array('class' => 'remember', ))}} Remember me</p>

	      
	        {{ Form::submit('Login',  array('class' => 'btn btn-lg btn-primary btn-block')) }}
		{{ Form::close() }}
	</div>
</div>
		
@stop


@section('bottomscript')
@stop