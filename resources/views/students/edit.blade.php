@extends('layouts.master')

@section('content')
	<h1> Edit a Student's Information </h1>

	<form action="{{ action('StudentsController@update') }}" method="POST">
		
		@include('partials.students-form')

		<input type="submit" value="Update student information" class="btn btn-default">
		{{ method_field('PUT') }}

	</form>
@stop