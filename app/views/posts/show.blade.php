@extends('layouts.master')

@section('content')

<section id ="blog" class="blog-index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{{ $post->title }}}</h1>
				<h4>{{{ $post->body }}}</h4>
				<h2><a href="{{{ action('PostController@index') }}}"> Return to post listings</a></h2>

				<a href="#" id="btnDeletePost">Delete</a> |
				<a href="{{{ action('PostController@edit', $post->id)}}}" class="btn">Edit</a>

				<!-- Form for deleting post -->
				{{ Form::open(array('action' => array('PostController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
				{{ Form::close() }}	
			</div>
		</div>	
	</div>
</section>

@stop


@section('bottomscript')

<script>

$('#btnDeletePost').on('click', function (e) {
	e.preventDefault();
	if (confirm('Are you sure?')) {
		$('#formDeletePost').submit();
	}
});

</script>

@stop