@extends('layouts.master')

@section('topscript')

<style type="text/css">
	body{
		padding-top: 70px
	}


	#big { 
		position:relative;
		padding-top: 70px;

	}

	#createbtn { position:absolute; 
		top:50%; 
		height:10em;
		margin-top:-5em 
	}

</style>

@stop



@section('content')
 	<div class="container" id="big"></div>
 	<div id= "createbtn" class="container">
	<div class="col-md-4 pull-right">
			<a href="{{{action('PostController@create') }}}"><h2>Create new post</h2></a>
	</div>

	</div>

	<div class="container">
			<div class="col-md-6">
				@foreach ($posts as $post)
				<a href="{{{ action('PostController@show', $post->id) }}}"><h3>{{{ $post->title }}}</h3></a>		    
				<p>{{{ Str::words($post->body, 10) }}}</p>
			    <div>
				<span class="badge">{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i: A ') }}}</span><div class="pull-right"></span></div>   
				     </div>
				    <hr>
				@endforeach
			{{ $posts->links() }}    
			</div> 
	</div>
 
@stop
