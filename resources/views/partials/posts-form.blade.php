{!! csrf_field() !!}

<div class="col-xs-offset-1 col-xs-10 postBody">
	<div class="form-group col-xs-offset-1 col-xs-10">
		<label for="title" class="header">Title</label>
		<input
			type="text" 
			id="title" 
			name="title" 
			class="form-control" 
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


<div class="col-xs-offset-1 col-xs-10 postBody">
	<div class="form-group col-xs-offset-1 col-xs-10">
		<label for="content" class="header">Content</label>
		<input
			type="text" 
			id="content" 
			name="content" 
			class="form-control content" 
			value="{{ $posts['content'] }}"
			rows="5">
		@if ($errors->has('content'))
			<div class="alert alert-warning" role="alert">
				{{ $errors->first('content') }}
			</div>
		@endif
	</div>
</div>


<div class="col-xs-offset-1 col-xs-10 postBody">	
	<div class="form-group col-xs-offset-1 col-xs-10">
		<label for="url" class="header">URL</label>
		<input 
			type="text" 
			id="url" 
			name="url" 
			class="form-control" 
			value="{{ $posts['url'] }}">
		@if ($errors->has('url'))
			<div class="alert alert-warning" role="alert">
				{{ $errors->first('url') }}
			</div>
		@endif
	</div>
</div>