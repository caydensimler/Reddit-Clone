@extends('layouts.master')

@section('content')

	@foreach ($posts as $post)
		<div class="col-xs-offset-1 col-xs-10 postBody">
			<div class="col-xs-12 title center">{{ $post['title'] }}</div>
			<div class="col-xs-12 postUrl center"><a href="http://{{ $post['url'] }}">{{ $post['url'] }}</a></div>
			<div class="col-xs-12 postContent center">
			@if (strlen($post['content']) > 200)
				{{ substr($post['content'], 0, 200) }}...
			@else
				{{ $post['content'] }}
			@endif
			</div>
			<div class="col-xs-12 center postUrl"><a href="{{ action('PostsController@show', $post['id']) }}">view post</a></div>
		</div>
	@endforeach

	<div class="col-xs-12 center">
		{!! $posts->render() !!}
	</div>

	<div class="col-xs-12 invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat quibusdam deserunt ullam reprehenderit quasi odio officia. Laboriosam accusantium eius autem distinctio voluptates temporibus natus at voluptatum quas soluta, in ducimus?</div>



@stop