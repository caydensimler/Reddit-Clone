@extends('layouts.master')

@section('content')
	<h1 class="createEditHeader"> Edit a Post</h1>

	<form action="{{ action('PostsController@update', $posts['id']) }}" method="POST">
		
		@include('partials.posts-form')
		<div class="col-xs-12 center">
			<input type="submit" value="update post information" class="btn btn-default">
		</div>
		{{ method_field('PUT') }}

	</form>

	<form action=" {{ action('PostsController@destroy', $posts['id']) }}" method="POST">
		{!! csrf_field() !!}
		<div class="col-xs-12 center">
			<input type="submit" value="Delete" class="btn btn-danger">
		</div>

		{{ method_field('DELETE') }}
	</form>
@stop