@extends('layouts.master')

@section('content')

	<div class="moveFromTop"></div>

	@foreach ($users as $user)
		
		<div class="col-xs-offset-1 col-xs-10 postBody">
			<div class="col-xs-11 usersName">{{ $user['name'] }}</div>
			<div class="col-xs-11 usersEmail">{{ $user['email'] }}</div>
			<div class="col-xs-11 usersCreated">Created on: {{ $user['created_at']->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>
	
			<div class="col-xs-11 usersCreated">
				<a href="{{ action('PostsController@destroyUser', $user['id']) }}">Delete User</a>
			</div>

		</div>
		
	@endforeach

	<div class="col-xs-12 center">
		{!! $users->render() !!}
	</div>

@stop