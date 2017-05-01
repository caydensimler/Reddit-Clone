

@extends('layouts.master')


@section('content')

<div class="moveFromTop"></div>
<div class="col-xs-offset-1 col-xs-10">
	<form method="POST" action=" {{ action('Auth\AuthController@postLogin') }} ">
	    {!! csrf_field() !!}

	    <div class="form-group postBody">
	        Email
	        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
	       	@if ($errors->has('email'))
	        	{{ $errors->first('email') }}
	        @endif
	    </div>

	    <div class="form-group postBody">
	        Password
	        <input type="password" name="password" id="password" class="form-control">
	        @if ($errors->has('password'))
	        	{{ $errors->first('password') }}
	        @endif
	    </div>

	    <div class="form-group">
	        <input type="checkbox" name="remember"> Remember Me
	    </div>

	    <div>
	        <button type="submit" class="btn btn-primary">Login</button>
	    </div>
	</form>
</div>


<div class="invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, minus voluptatem voluptates. Nostrum voluptates sint quasi consectetur fugit explicabo, quam dolorum sunt ut consequuntur in iusto alias laboriosam deleniti ullam.</div>





@stop