@extends('layouts.master')

<div class="moveFromTop"></div>
@section('content')

	<div class="accountHeader"> Welcome to your account page, {{ \Auth::user()->name }}. </div>

	@if (sizeof($posts) == 0)
		<div class="col-xs-offset-1 col-xs-10 noPosts">Looks like you haven't created any posts yet! Try creating your first post<a href="/posts/create"> here</a></div>
	@endif

	@foreach ($posts as $post)
		
		<div class="col-xs-offset-1 col-xs-10 postBody">
			<div class="col-xs-11 title center">{{ $post['title'] }}</div>

			<div class="col-xs-1 viewPost align-middle">
				<a href="{{ action('PostsController@show', $post['id']) }}">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
				</a>
			</div>

			<div class="col-xs-12 postsName">by {{ App\User::find($post['created_by'])->name }}</div>
			<div class="col-xs-12 postUrl center"><a href="http://{{ $post['url'] }}">{{ $post['url'] }}</a></div>
			<div class="col-xs-12 postContent center">
			@if (strlen($post['content']) > 200)
				{{ substr($post['content'], 0, 200) }}...
			@else
				{{ $post['content'] }}
			@endif
			</div>
		</div>
		
	@endforeach

	<div class="col-xs-12 center">
		{!! $posts->render() !!}
	</div>

	<div class="col-xs-12 invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quibusdam deserunt ullam reprehenderit quasi odio officia. Laboriosam accusantium eius autem distinctio voluptates temporibus natus at voluptatum quas soluta, in ducimus?</div>


@stop