@extends('layouts.master')

@section('content')

	@if ($showHeader == true)
		<div class="postsHeader">
			<div class="postsHeaderTitle">Styledit</div>
			<div class="postsHeaderSubTitle">"It's like Reddit, but with style!"</div>
		</div>
	@else
		<div class="moveFromTop"></div>
	@endif

	<div class="col-xs-offset-3 col-xs-6">
		<form action="" method="GET">
			<div class="col-xs-12 searchHeader">Search Posts by User's Name or Post's Title</div>
			<input type="text" name="search" id="search" class="searchBar">
			<div class="col-xs-12 buttonHolder">
			  	<label class="searchOptions active searchPost">
			   		<input type="checkbox" name="searchByPost" checked id="searchPost" autocomplete="off" class="searchPost" value="post"> Search by Post's Title
			  	</label>
				<label class="searchOptions active searchUser">
			    	<input type="checkbox" name="searchByUser" checked id="searchUser" autocomplete="off" class="searchUser" value="user"> Search by User's Name
			  	</label>
			  	<label for="submit" class="searchSubmit">
			  		<input type="submit" class="btn-success">
			  	</label>
		  	</div>
		</form>
	</div>

	@if (sizeof($posts) == 0 && !isset($_GET['search']))
		<div class="col-xs-offset-1 col-xs-10 noPosts">Looks like there are no posts yet! No worries, you can create the first post<a href="/posts/create"> here</a></div>
	@elseif (sizeof($posts) == 0 && isset($_GET['search']))
		<div class="col-xs-offset-1 col-xs-10 noPosts noSearch">Sorry, no posts with that search criteria found! :(</div>
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