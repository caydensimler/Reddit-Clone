{!! csrf_field() !!}

<div class="col-xs-offset-2 col-xs-8 registerBody registerBodyTop">
	<div class="form-group col-xs-offset-1 col-xs-10">
		<div class="invisible">adsfs</div>
		<div class="registerHeader">Title</div>
		<input
			type="text" 
			id="title" 
			name="title" 
			class="form-control title registerInput" 
			value="{{ $posts['title'] }}"
			rows="1"
		>
		@if ($errors->has('title'))
			<div class="alert alert-warning" role="alert">
				{{ $errors->first('title') }}
			</div>
		@endif
	</div>
</div>


<div class="col-xs-offset-2 col-xs-8 registerBody">
	<div class="form-group col-xs-offset-1 col-xs-10">
		<div class="invisible">adsfs</div>
		<div class="registerHeader">Content</div>
		<textarea
			type="text" 
			id="content" 
			name="content" 
			class="form-control content registerInput" 
			rows="5">{{ $posts['content'] }}</textarea>
		@if ($errors->has('content'))
			<div class="alert alert-warning" role="alert">
				{{ $errors->first('content') }}
			</div>
		@endif
	</div>
</div>


<div class="col-xs-offset-2 col-xs-8 registerBody">	
	<div class="form-group col-xs-offset-1 col-xs-10">
		<div class="invisible">adsfs</div>
		<div class="registerHeader">URL</div>
		<input 
			type="text" 
			id="url" 
			name="url" 
			class="form-control url registerInput" 
			value="{{ $posts['url'] }}">
		@if ($errors->has('url'))
			<div class="alert alert-warning" role="alert">
				{{ $errors->first('url') }}
			</div>
		@endif
	</div>
</div>