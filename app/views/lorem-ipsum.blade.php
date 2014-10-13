@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')
	<h1>Lorem Ipsum Generator</h1>

	{{ Form::open(array(
		'url' => 'lorem-ipsum'
	)) }}

		{{ Form::label('paragraphs', 'How many paragraphs?') }}
    	{{ Form::text('paragraphs', '1') }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop