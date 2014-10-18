@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('bodyid')
	"lorem"
@stop

@section('pagehead')
	Lorem Ipsum Generator
@stop

@section('subhead')
	Use the form below to generate some lorem ipsum.
@stop

@section('content')

	{{ Form::open(array(
		'url' => 'lorem-ipsum'
	)) }}

		{{ Form::label('paragraphs', 'How many paragraphs?') }}
    	{{ Form::text('paragraphs', '1') }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
@stop