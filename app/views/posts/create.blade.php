@extends('layouts.master')






@section('content')
<section id="blog" class="blog-index">
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="col-sm-12">
				<h2>Create a New Post</h2>
			
			</div>
		<p>{{ Form::open(array('action' => 'PostController@store', 'class' => 'form-horizontal')) }} </p>
        <p>{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title'))  }}</p>      
           {{ $errors->first('title', '<p><span class="help-block">:message</span><p>') }}
           {{ Form::textarea('body', null, array('class' => 'form-control', 'row' => '5', 'placeholder' => 'Body')) }} 
            {{ $errors->first('body', '<p><span class="help-block">:message</span><p>') }}
            <hr>
           {{Form::submit('Create Post');}}
		   {{Form::close()}}
            
		</div>
        <br/>			
		</div>
	</div>
</section>

		
@stop


@section('bottomscript')
@stop