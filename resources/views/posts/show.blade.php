@extends('layouts.master')

@section('content')

<div class="moveFromTop"></div>

	<div class="col-xs-offset-1 col-xs-10 postBody">
		<div class="col-xs-11 title center">
			<a href="#" onClick="history.go(-1);return true;"><i class="fa fa-chevron-left" aria-hidden="true" class="backButton"></i></a>
			{{ $posts['title'] }} 
		</div>
		<div class="col-xs-12 postsName">by {{ App\User::find($posts['created_by'])->name }}</div>
		<div class="col-xs-12 url center postUrl"><a href="http://{{ $posts['url'] }}">{{ $posts['url'] }}</a></div>
		<div class="col-xs-12 postContent center"> {{ $posts['content'] }} </div>
		<div class="col-xs-12 invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae enim ducimus suscipit, totam explicabo pariatur! Dolorem non cum laborum. Numquam ad, ipsum error mollitia! Corrupti error, ea voluptate magnam modi?</div>
		<div class="col-xs-12 postUrl center">Created on: {{ $posts['created_at']->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>
		<div class="col-xs-12 postUrl center">Updated on: {{ $posts['updated_at']->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>


	
	</div>

	<div class="col-xs-offset-2 col-xs-8 registerBody registerBodyBottom buttonHolder">

		@if (\Auth::check() && \Auth::user()->id === $posts['created_by'] || \Auth::user()->email === 'admin@admin.com')
			<div class="col-xs-4 usersPosts">
				<button type="" class="btn btn-success registerButton">
					<a href="{{ $posts['id'] }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Post</a>
				</button>
			</div>
		@else
			<div class="col-xs-4"></div>
		@endif

		<div class="col-xs-4 usersPosts">
			<button type="" class="btn btn-success registerButton">
				<a href="/users/posts/{{ $posts->created_by }}"><i class="fa fa-user-o" aria-hidden="true"></i> All User's Posts</a>
			</button>
		</div>

		@if (\Auth::check() && \Auth::user()->id === $posts['created_by'] || \Auth::user()->email === 'admin@admin.com')
			<div class="col-xs-4 usersPosts">
				<form action=" {{ action('PostsController@destroy', $posts['id']) }}" method="POST">
					{!! csrf_field() !!}
				
						<button type="submit" value="Delete" class="btn btn-danger registerButton">Delete Post</button>

					{{ method_field('DELETE') }}
				</form>
			</div>
		@endif
	</div>


@stop