@extends('layouts.master')

@section('content')

<div class="moveFromTop"></div>

	<div class="col-xs-offset-1 col-xs-10 postBody">
		<div class="col-xs-11 title center"> {{ $posts['title'] }} </div>
		<div class="col-xs-1 viewPost">
			<a href="#" onClick="history.go(-1);return true;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
		</div>
		<div class="col-xs-12 url center postUrl"><a href="http://{{ $posts['url'] }}">{{ $posts['url'] }}</a></div>
		<div class="col-xs-12 postContent center"> {{ $posts['content'] }} </div>
		<div class="col-xs-12 invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae enim ducimus suscipit, totam explicabo pariatur! Dolorem non cum laborum. Numquam ad, ipsum error mollitia! Corrupti error, ea voluptate magnam modi?</div>
		<div class="col-xs-12 postUrl center">Created on: {{ $posts['created_at']->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>
		<div class="col-xs-12 postUrl center">Updated on: {{ $posts['updated_at']->setTimezone('America/Chicago')->format('l, F jS, Y \a\t g:i A') }} </div>

		@if (\Auth::user()->id === $posts['created_by'])
			<div class="col-xs-12 center editPost">
				<a href="{{ $posts['id'] }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Post</a>
			</div>  
		@endif
	</div>



@stop