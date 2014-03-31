<!-- 
<section id="blog" class="blog-index">
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="col-sm-12 form-group">

				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', $post->title) }}
				{{$errors->first('title', '<p><span class="help-block">:message</span></p>') }}


			<div class="col-sm-12 form-group" >
				{{ Form::label('body', 'Body') }}
				{{ Form::text('body', $post->body) }}
				{{$errors->first('body', '<p><span class="help-block">:message</span></p>') }}
				<hr>
				{{ Form::submit('Save Post') }}

			</div>
			</div>			
		</div>
	</div>
</section> -->