@extends('layouts.master')

@section('content')
	<div class="moveFromTop"></div>
	<div class="col-xs-offset-1 col-xs-10 registerTitle">Create a post!</div>

	<form action="{{ action('PostsController@store') }}" method="POST">

		@include('partials.posts-form')
		
		<div class="col-xs-offset-2 col-xs-8 registerBody registerBodyBottom buttonHolder">
			<button type="submit" class="btn btn-primary registerButton">Login</button>
		</div>

		
	</form>
	
@stop