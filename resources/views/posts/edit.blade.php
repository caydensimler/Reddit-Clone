@extends('layouts.master')

@section('content')
	<div class="moveFromTop"></div>
	<div class="col-xs-offset-1 col-xs-10 registerTitle">Use the form below to edit your post.</div>

	<form action="{{ action('PostsController@update', $posts['id']) }}" method="POST">
		
		@include('partials.posts-form')
		<div class="col-xs-12 invisible">asdf</div>
		<div class="col-xs-offset-2 col-xs-8 registerBody registerBody buttonHolder">
			<button type="submit" class="btn btn-default registerButton">Update Post Information</button>
		</div>
		{{ method_field('PUT') }}

	</form>

	<form action=" {{ action('PostsController@destroy', $posts['id']) }}" method="POST">
		{!! csrf_field() !!}
		<div class="col-xs-offset-2 col-xs-8 registerBody registerBodyBottom buttonHolder">
			<button type="submit" value="Delete" class="btn btn-danger registerButton">Delete Post</button>
		</div>

		{{ method_field('DELETE') }}
	</form>
@stop