@extends('layouts.master')


@section('content')

<div class="moveFromTop"></div>

	<div class="col-xs-offset-1 col-xs-10">Fill out the form below to register an account!</div>
	<form method="POST" action=" {{ action('Auth\AuthController@postRegister') }} ">
	    {!! csrf_field() !!}

	    <div class="col-xs-offset-3 col-xs-6 registerBody registerBodyTop">
	    	<div class="invisible">adsfs</div>
	        <label for="name" class="registerHeader">Name</label>
	        <input type="text" name="name" value="{{ old('name') }}" class="form-control registerInput">
	        @if ($errors->has('name'))
	        	{{ $errors->first('name') }}
	        @endif
	        <div class="invisible">adsfs</div>
	    </div>

	    <div class="col-xs-offset-3 col-xs-6 registerBody">
	        <label for="email" class="registerHeader">Email</label>
	        <input type="email" name="email" value="{{ old('email') }}" class="form-control registerInput">
	        @if ($errors->has('email'))
	        	{{ $errors->first('email') }}
	        @endif
	        <div class="invisible">adsfs</div>
	    </div>

	    <div class="col-xs-offset-3 col-xs-6 registerBody">
	        <label for="password" class="registerHeader">Password</label>
	        <input type="password" name="password" class="form-control registerInput">
	        @if ($errors->has('password'))
	        	{{ $errors->first('password') }}
	        @endif
	        <div class="invisible">adsfs</div>
	    </div>

	    <div class="col-xs-offset-3 col-xs-6 registerBody">
	        <label for="password" class="registerHeader">Confirm Password</label>
	        <input type="password" name="password_confirmation" class="form-control registerInput">
	        @if ($errors->has('password_confirmation'))
	        	{{ $errors->first('password_confirmation') }}
	        @endif
	        <div class="invisible">adsfs</div>
	    </div>

	    <div class="col-xs-offset-3 col-xs-6 registerBody registerBodyBottom">
	        <button type="submit" class="btn btn-default">Register</button>
	    </div>
	</form>






@stop

