@extends('layouts.master')

@section('content')
	<h1> Create a Student </h1>

	<form action="{{ action('StudentsController@store') }}" method="POST">

		@include('partials.students-form')

		<input type="submit" value="Create student" class="btn btn-default">

	</form>
	
@stop