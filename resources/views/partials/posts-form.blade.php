{!! csrf_field() !!}

<div class="form-group">
	<label for="title">Title</label>
	<input 
		type="text" 
		id="title" 
		name="title" 
		class="form-control" 
		value="{{ $posts['title'] }}">
	@if ($errors->has('title'))
		<div class="alert alert-warning" role="alert">
			{{ $errors->first('title') }}
		</div>
	@endif
</div>
<div class="form-group">
	<label for="content">Content</label>
	<input 
		type="text" 
		id="content" 
		name="content" 
		class="form-control" 
		value="{{ $posts['content'] }}">
	@if ($errors->has('content'))
		<div class="alert alert-warning" role="alert">
			{{ $errors->first('content') }}
		</div>
	@endif
</div>
<div class="form-group">
	<label for="url">URL</label>
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