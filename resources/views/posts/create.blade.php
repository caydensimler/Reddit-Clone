@extends('layouts.master')

@section('content')
	<h1 class="createEditHeader">Create a Post</h1>

	<form action="{{ action('PostsController@store') }}" method="POST">

		@include('partials.posts-form')

		<input type="submit" value="create post" class="btn btn-default">
		
	</form>
	
@stop