

@extends('layouts.master')


@section('content')

<div class="moveFromTop"></div>

<div class="col-xs-offset-1 col-xs-10 registerTitle">Sign in with your email and password here!</div>
<form method="POST" action=" {{ action('Auth\AuthController@postLogin') }} ">
    {!! csrf_field() !!}

    <div class="col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4 registerBody registerBodyTop">
    	<div class="invisible">adsfs</div>
        <div class="registerHeader">Email</div>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control registerInput">
       	@if ($errors->has('email'))
        	{{ $errors->first('email') }}
        @endif
        <div class="invisible">adsfs</div>
    </div>

    <div class="col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4 registerBody">
    	<div class="invisible">adsfs</div>
        <div class="registerHeader">Password</div>
        <input type="password" name="password" id="password" class="form-control registerInput">
        @if ($errors->has('password'))
        	{{ $errors->first('password') }}
        @endif
        <div class="invisible">adsfs</div>
    </div>

	<div class="col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4 registerBody registerBodyBottom buttonHolder">
        <button type="submit" class="btn btn-default registerButton">Login</button>
    </div>
</form>



<div class="invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, minus voluptatem voluptates. Nostrum voluptates sint quasi consectetur fugit explicabo, quam dolorum sunt ut consequuntur in iusto alias laboriosam deleniti ullam.</div>





@stop