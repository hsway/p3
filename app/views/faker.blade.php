@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	<h1>Random User Generator</h1>

	{{ Form::open(array(
		'url' => 'faker'
	)) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop