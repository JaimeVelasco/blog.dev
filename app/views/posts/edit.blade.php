@extends('layouts.master')


@section('topscript')
@stop



@section('content')
<section id="blog" class="blog-index">
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="col-sm-12">
				<h2>Edit your post</h2>			
			</div>
				<p>{{ Form::model($post, array('action' => array('PostController@update', $post->id), 'method' => 'put', 'class' => 'form-horizontal')) }}</p>
			<div class="col-sm-12 form-group">
				<!-- <p>{{ Form::label('title', 'Title', array ('class' => 'col-sm-12 control_label')) }} -->
				<p>{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title'))  }}</p>
				{{ $errors->first('title', '<p><span class="help-block">:message</span><p>') }}
				</p>
				<!-- <p>{{ Form::label('body', 'Body') }} -->
				{{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5', 'placeholder' => 'Body')) }}
				{{ $errors->first('body', '<p><span class="help-block">:message</span><p>') }}	               
				</p>		
			<br/>
				{{Form::submit('Save Changes');}}
				{{Form::close()}}

			</div>			
		</div>
	</div>
</section>

@stop

@section('bottomscript')
@stop