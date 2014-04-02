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

	#createbtn { 
		position:absolute; 
		top:50%; 
		height:10em;
		margin-top:-5em 
	}

	#postEmail{
		position: relative;
		float: right;

	}

	#postTime{

		
		float: left;
	}
</style>

@stop



@section('content')
<div
	 class="container" id="big">
</div>
 	<div id= "createbtn" class="container">
		<div class="col-sm-4 pull-right">
				<a href="{{{action('PostController@create') }}}"><h2>Create new post</h2></a><hr><br>
			<div class="container col-sm-12">
				{{ Form::open(array('action' => array('PostController@index'), 'method' => 'GET')) }}
					{{ Form::label('search', 'Search Posts') }}
					<br>
					<p>{{ Form::text('search') }}
					{{ Form::submit('Search')}}</p>
				{{Form::close()}}	
			</div>
		</div>
	</div>

	<div class="container">
			<div class="col-md-6">
				@foreach ($posts as $post)
				<a href="{{{ action('PostController@show', $post->id) }}}"><h3>{{{ $post->title }}}</h3></a>		    
				<p>{{{ Str::words($post->body, 10) }}}
	
			<div>
				<span class="badge" id="postTime">{{{ $post->created_at->format('l, F jS Y @ h:i: A ') }}}</span>
			  
				<span class="badge" id="postEmail">{{{ $post->user->email }}}</span></p>
			</div>

				    <hr>
				@endforeach
			{{ $posts->appends(array('search' => Input::get('search')))->links() }}    
			</div> 
	</div>
 
@stop
