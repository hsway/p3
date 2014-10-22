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

@section('form')

	<br />

	{{ Form::open(array(
		'url' => 'lorem-ipsum'
	)) }}

		{{ Form::label('paragraphs', 'How many paragraphs?') }}
    	{{ Form::text('paragraphs', $paragraphs, array(
    		'maxlength' => 1
    	)) }} (max = 9)

    	<br /><br />

		{{ Form::submit('Get your text!', 
			array('class' => 'btn btn-success'
		)) }}

	{{ Form::close() }}
@stop