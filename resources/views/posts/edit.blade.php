@extends('layouts.master')

@section('content')
	<h1> Edit a Post</h1>

	<form action="{{ action('PostsController@update', $posts['id']) }}" method="POST">
		
		@include('partials.posts-form')

		<input type="submit" value="update post information" class="btn btn-default">
		{{ method_field('PUT') }}

	</form>

	<form action=" {{ action('PostsController@destroy', $posts['id']) }}" method="POST">
		{!! csrf_field() !!}

		<input type="submit" value="Delete" class="btn btn-danger">

		{{ method_field('DELETE') }}
	</form>
@stop