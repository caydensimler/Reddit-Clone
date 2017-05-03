@extends('layouts.master')

@section('content')

	<div class="moveFromTop"></div>

	@foreach ($users as $user)
		
		<div class="col-xs-offset-1 col-xs-10 postBody">
			<div class="col-xs-11 usersName">{{ $user->name }}</div>
			<div class="col-xs-11 usersEmail">{{ $user->email }}</div>
			<div class="col-xs-11 usersCreated">Created on: {{ $user->created_at->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>
			<div class="col-xs-11 usersCreated">User ID: {{ $user->id }}</div>

		</div>

		<div class="col-xs-offset-2 col-xs-8 registerBody registerBodyBottom buttonHolder">
			<div class="col-xs-6">
				<form action=" {{ action('PostsController@destroyUser', $user->id) }} " method="POST">
					{!! csrf_field() !!}
					<button type="submit" value="Delete" class="btn btn-danger registerButton">
						<i class="fa fa-trash-o" aria-hidden="true"></i> Delete User
					</button>
				</form>
			</div>

			<div class="col-xs-6 usersPosts">
				<button type="" class="btn btn-success registerButton">
					<a href="/users/posts/{{ $user->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> View Posts</a>
				</button>
			</div>
		</div>
		
	@endforeach

	<div class="col-xs-12 center">
		{!! $users->render() !!}
	</div>

@stop