@extends('master')


@section('content')

{!! Form::open(['route'=> 'posts.store']) !!}
	<legend>New Post</legend>
	<div class="form-group">
	{!! Form::label('title', 'Post Title') !!}
	{!! Form::text('title',null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
	{!! Form::label('content', 'Post Content') !!}
	{!! Form::textarea('content',null, ['class'=>'form-control'])!!}
	</div>


	{!! Form::submit('Publish',['class'=>'btn btn-primary']) !!}



{!! Form::close() !!}


@stop