@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>

	{{ Form::open(array(
		'url' => 'lorem-ipsum'
	)) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop